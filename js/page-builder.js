
// Advanced Page Builder JavaScript
class PageBuilder {
    constructor() {
        this.canvas = document.getElementById('page-canvas');
        this.propertiesPanel = document.getElementById('properties-content');
        this.selectedElement = null;
        this.draggedWidget = null;
        this.history = [];
        this.historyIndex = -1;
        this.zoom = 1;
        this.templates = this.initializeTemplates();
        
        this.init();
    }

    init() {
        this.setupDragAndDrop();
        this.setupCanvasEvents();
        this.setupWidgetSearch();
        this.setupViewControls();
        this.loadAutoSave();
        
        console.log('Page Builder initialized');
    }

    setupDragAndDrop() {
        // Widget drag start
        document.querySelectorAll('.widget-item').forEach(widget => {
            widget.addEventListener('dragstart', (e) => {
                this.draggedWidget = e.target.dataset.widget;
                e.target.classList.add('dragging');
                e.dataTransfer.effectAllowed = 'copy';
            });

            widget.addEventListener('dragend', (e) => {
                e.target.classList.remove('dragging');
            });
        });

        // Canvas drop events
        this.canvas.addEventListener('dragover', (e) => {
            e.preventDefault();
            e.dataTransfer.dropEffect = 'copy';
            this.canvas.classList.add('drag-over');
        });

        this.canvas.addEventListener('dragleave', (e) => {
            if (!this.canvas.contains(e.relatedTarget)) {
                this.canvas.classList.remove('drag-over');
            }
        });

        this.canvas.addEventListener('drop', (e) => {
            e.preventDefault();
            this.canvas.classList.remove('drag-over');
            
            if (this.draggedWidget) {
                const rect = this.canvas.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                this.addWidget(this.draggedWidget, x, y);
                this.draggedWidget = null;
            }
        });
    }

    setupCanvasEvents() {
        this.canvas.addEventListener('click', (e) => {
            const element = e.target.closest('.builder-element');
            if (element) {
                this.selectElement(element);
            } else {
                this.deselectElement();
            }
        });

        // Element hover effects
        this.canvas.addEventListener('mouseover', (e) => {
            const element = e.target.closest('.builder-element');
            if (element && element !== this.selectedElement) {
                element.classList.add('element-hover');
            }
        });

        this.canvas.addEventListener('mouseout', (e) => {
            const element = e.target.closest('.builder-element');
            if (element) {
                element.classList.remove('element-hover');
            }
        });
    }

    setupWidgetSearch() {
        const searchInput = document.getElementById('widget-search');
        searchInput.addEventListener('input', (e) => {
            this.filterWidgets(e.target.value);
        });

        // Category filters
        document.querySelectorAll('.widget-category').forEach(category => {
            category.addEventListener('click', (e) => {
                document.querySelectorAll('.widget-category').forEach(c => c.classList.remove('active'));
                e.target.classList.add('active');
                this.filterWidgetsByCategory(e.target.dataset.category);
            });
        });
    }

    setupViewControls() {
        document.querySelectorAll('.view-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const view = e.target.dataset.view;
                if (view) {
                    this.changeView(view);
                }
            });
        });
    }

    addWidget(widgetType, x, y) {
        const widgetConfig = this.getWidgetConfig(widgetType);
        const elementId = 'element_' + Date.now();
        
        const element = document.createElement('div');
        element.className = 'builder-element';
        element.dataset.type = widgetType;
        element.dataset.id = elementId;
        element.innerHTML = widgetConfig.html;
        element.style.position = 'absolute';
        element.style.left = x + 'px';
        element.style.top = y + 'px';

        // Remove placeholder if it exists
        const placeholder = this.canvas.querySelector('.canvas-placeholder');
        if (placeholder) {
            placeholder.remove();
        }

        this.canvas.appendChild(element);
        this.selectElement(element);
        this.saveToHistory();
        this.autoSave();

        console.log(`Added ${widgetType} widget at ${x}, ${y}`);
    }

    getWidgetConfig(type) {
        const configs = {
            heading: {
                html: `<h2 class="editable-heading" contenteditable="true">Votre Titre Ici</h2>`,
                properties: {
                    text: 'Votre Titre Ici',
                    level: 'h2',
                    color: '#333333',
                    fontSize: '2rem',
                    textAlign: 'left',
                    fontWeight: 'bold'
                }
            },
            text: {
                html: `<p class="editable-text" contenteditable="true">Votre texte ici. Cliquez pour modifier ce paragraphe et ajouter votre propre contenu.</p>`,
                properties: {
                    text: 'Votre texte ici...',
                    color: '#666666',
                    fontSize: '1rem',
                    textAlign: 'left',
                    lineHeight: '1.6'
                }
            },
            button: {
                html: `<button class="builder-button">Cliquez ici</button>`,
                properties: {
                    text: 'Cliquez ici',
                    url: '#',
                    backgroundColor: '#007bff',
                    textColor: '#ffffff',
                    borderRadius: '6px',
                    padding: '12px 24px',
                    fontSize: '1rem'
                }
            },
            image: {
                html: `<div class="image-placeholder">
                    <i class="fas fa-image"></i>
                    <p>Cliquez pour ajouter une image</p>
                </div>`,
                properties: {
                    src: '',
                    alt: '',
                    width: '100%',
                    height: 'auto',
                    borderRadius: '0px'
                }
            },
            container: {
                html: `<div class="builder-container">
                    <div class="container-placeholder">Container - Glissez des éléments ici</div>
                </div>`,
                properties: {
                    backgroundColor: 'transparent',
                    padding: '20px',
                    margin: '0px',
                    borderRadius: '0px',
                    minHeight: '100px'
                }
            },
            columns: {
                html: `<div class="builder-columns">
                    <div class="column">Colonne 1</div>
                    <div class="column">Colonne 2</div>
                </div>`,
                properties: {
                    columns: 2,
                    gap: '20px',
                    alignItems: 'flex-start'
                }
            },
            spacer: {
                html: `<div class="builder-spacer"></div>`,
                properties: {
                    height: '50px'
                }
            },
            list: {
                html: `<ul class="builder-list">
                    <li>Élément de liste 1</li>
                    <li>Élément de liste 2</li>
                    <li>Élément de liste 3</li>
                </ul>`,
                properties: {
                    listType: 'ul',
                    color: '#333333',
                    fontSize: '1rem'
                }
            },
            'contact-form': {
                html: `<form class="builder-form">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" placeholder="Votre nom">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="votre@email.com">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea placeholder="Votre message"></textarea>
                    </div>
                    <button type="submit">Envoyer</button>
                </form>`,
                properties: {
                    action: '/contact',
                    method: 'POST',
                    backgroundColor: '#ffffff',
                    borderColor: '#dee2e6'
                }
            },
            video: {
                html: `<div class="video-placeholder">
                    <i class="fas fa-play-circle"></i>
                    <p>Ajouter une vidéo</p>
                </div>`,
                properties: {
                    src: '',
                    autoplay: false,
                    controls: true,
                    width: '100%',
                    height: '315px'
                }
            }
        };

        return configs[type] || configs.text;
    }

    selectElement(element) {
        // Remove previous selection
        this.deselectElement();
        
        // Add selection to new element
        element.classList.add('element-selected');
        this.selectedElement = element;
        
        // Update properties panel
        this.updatePropertiesPanel(element);
        
        console.log('Selected element:', element.dataset.type);
    }

    deselectElement() {
        if (this.selectedElement) {
            this.selectedElement.classList.remove('element-selected');
            this.selectedElement = null;
        }
        
        // Show empty state in properties panel
        this.propertiesPanel.innerHTML = `
            <div class="no-selection">
                <div class="empty-state">
                    <i class="fas fa-cursor"></i>
                    <p>Sélectionnez un élément pour voir ses propriétés</p>
                </div>
            </div>`;
    }

    updatePropertiesPanel(element) {
        const type = element.dataset.type;
        const config = this.getWidgetConfig(type);
        
        let propertiesHTML = `
            <div class="properties-form">
                <div class="property-section">
                    <h4><i class="fas fa-cog"></i> ${this.getWidgetTitle(type)}</h4>
                </div>`;

        // Generate form fields based on widget properties
        Object.entries(config.properties).forEach(([key, value]) => {
            propertiesHTML += this.generatePropertyField(key, value, type);
        });

        // Add common properties
        propertiesHTML += `
            <div class="property-section">
                <h4><i class="fas fa-paint-brush"></i> Style</h4>
                <div class="property-group">
                    <label>Largeur</label>
                    <input type="text" data-property="width" value="${element.style.width || 'auto'}">
                </div>
                <div class="property-group">
                    <label>Hauteur</label>
                    <input type="text" data-property="height" value="${element.style.height || 'auto'}">
                </div>
                <div class="property-group">
                    <label>Marge externe</label>
                    <input type="text" data-property="margin" value="${element.style.margin || '0px'}">
                </div>
                <div class="property-group">
                    <label>Marge interne</label>
                    <input type="text" data-property="padding" value="${element.style.padding || '0px'}">
                </div>
            </div>
            
            <div class="property-section">
                <h4><i class="fas fa-trash"></i> Actions</h4>
                <button class="btn-danger" onclick="pageBuilder.deleteElement()">
                    <i class="fas fa-trash"></i> Supprimer
                </button>
                <button class="btn-secondary" onclick="pageBuilder.duplicateElement()">
                    <i class="fas fa-copy"></i> Dupliquer
                </button>
            </div>
        </div>`;

        this.propertiesPanel.innerHTML = propertiesHTML;
        
        // Attach event listeners
        this.attachPropertyListeners();
    }

    generatePropertyField(key, value, type) {
        const fieldTypes = {
            text: 'text',
            color: 'color',
            fontSize: 'text',
            url: 'url',
            backgroundColor: 'color',
            textColor: 'color',
            borderColor: 'color',
            src: 'url',
            alt: 'text',
            width: 'text',
            height: 'text'
        };

        const fieldType = fieldTypes[key] || 'text';
        const label = this.getPropertyLabel(key);

        if (key === 'level') {
            return `
                <div class="property-group">
                    <label>${label}</label>
                    <select data-property="${key}">
                        <option value="h1" ${value === 'h1' ? 'selected' : ''}>H1</option>
                        <option value="h2" ${value === 'h2' ? 'selected' : ''}>H2</option>
                        <option value="h3" ${value === 'h3' ? 'selected' : ''}>H3</option>
                        <option value="h4" ${value === 'h4' ? 'selected' : ''}>H4</option>
                        <option value="h5" ${value === 'h5' ? 'selected' : ''}>H5</option>
                        <option value="h6" ${value === 'h6' ? 'selected' : ''}>H6</option>
                    </select>
                </div>`;
        }

        if (key === 'textAlign') {
            return `
                <div class="property-group">
                    <label>${label}</label>
                    <select data-property="${key}">
                        <option value="left" ${value === 'left' ? 'selected' : ''}>Gauche</option>
                        <option value="center" ${value === 'center' ? 'selected' : ''}>Centre</option>
                        <option value="right" ${value === 'right' ? 'selected' : ''}>Droite</option>
                        <option value="justify" ${value === 'justify' ? 'selected' : ''}>Justifié</option>
                    </select>
                </div>`;
        }

        return `
            <div class="property-group">
                <label>${label}</label>
                <input type="${fieldType}" data-property="${key}" value="${value}">
            </div>`;
    }

    getPropertyLabel(key) {
        const labels = {
            text: 'Texte',
            level: 'Niveau',
            color: 'Couleur',
            fontSize: 'Taille police',
            textAlign: 'Alignement',
            fontWeight: 'Graisse',
            backgroundColor: 'Couleur fond',
            textColor: 'Couleur texte',
            borderRadius: 'Bordure arrondie',
            padding: 'Marge interne',
            url: 'Lien URL',
            src: 'Source',
            alt: 'Texte alternatif',
            width: 'Largeur',
            height: 'Hauteur'
        };
        
        return labels[key] || key;
    }

    getWidgetTitle(type) {
        const titles = {
            heading: 'Titre',
            text: 'Texte',
            button: 'Bouton',
            image: 'Image',
            container: 'Container',
            columns: 'Colonnes',
            spacer: 'Espaceur',
            list: 'Liste',
            'contact-form': 'Formulaire',
            video: 'Vidéo'
        };
        
        return titles[type] || type;
    }

    attachPropertyListeners() {
        const inputs = this.propertiesPanel.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('input', (e) => {
                this.updateElementProperty(e.target.dataset.property, e.target.value);
            });
        });
    }

    updateElementProperty(property, value) {
        if (!this.selectedElement) return;

        const element = this.selectedElement;
        const contentElement = element.querySelector('[contenteditable], button, input, select, textarea') || element;

        switch (property) {
            case 'text':
                if (contentElement.tagName === 'BUTTON') {
                    contentElement.textContent = value;
                } else if (contentElement.hasAttribute('contenteditable')) {
                    contentElement.textContent = value;
                }
                break;
            case 'level':
                if (element.dataset.type === 'heading') {
                    const newElement = document.createElement(value);
                    newElement.className = contentElement.className;
                    newElement.textContent = contentElement.textContent;
                    newElement.setAttribute('contenteditable', 'true');
                    contentElement.parentNode.replaceChild(newElement, contentElement);
                }
                break;
            case 'color':
            case 'textColor':
                contentElement.style.color = value;
                break;
            case 'backgroundColor':
                element.style.backgroundColor = value;
                break;
            case 'fontSize':
                contentElement.style.fontSize = value;
                break;
            case 'textAlign':
                contentElement.style.textAlign = value;
                break;
            case 'url':
                if (element.dataset.type === 'button') {
                    element.setAttribute('data-url', value);
                }
                break;
            default:
                element.style[property] = value;
        }

        this.autoSave();
    }

    deleteElement() {
        if (this.selectedElement) {
            this.selectedElement.remove();
            this.deselectElement();
            this.saveToHistory();
            this.autoSave();
        }
    }

    duplicateElement() {
        if (this.selectedElement) {
            const clone = this.selectedElement.cloneNode(true);
            clone.dataset.id = 'element_' + Date.now();
            clone.style.left = (parseInt(this.selectedElement.style.left) + 20) + 'px';
            clone.style.top = (parseInt(this.selectedElement.style.top) + 20) + 'px';
            
            this.canvas.appendChild(clone);
            this.selectElement(clone);
            this.saveToHistory();
            this.autoSave();
        }
    }

    filterWidgets(searchTerm) {
        const widgets = document.querySelectorAll('.widget-item');
        widgets.forEach(widget => {
            const title = widget.querySelector('h4').textContent.toLowerCase();
            const description = widget.querySelector('p').textContent.toLowerCase();
            const matches = title.includes(searchTerm.toLowerCase()) || 
                          description.includes(searchTerm.toLowerCase());
            
            widget.style.display = matches ? 'flex' : 'none';
        });
    }

    filterWidgetsByCategory(category) {
        const widgets = document.querySelectorAll('.widget-item');
        widgets.forEach(widget => {
            const widgetCategory = widget.dataset.category;
            const show = category === 'all' || widgetCategory === category;
            widget.style.display = show ? 'flex' : 'none';
        });
    }

    changeView(view) {
        const canvas = this.canvas;
        canvas.className = 'canvas-area';
        
        switch (view) {
            case 'tablet':
                canvas.style.width = '768px';
                canvas.style.margin = '1rem auto';
                break;
            case 'mobile':
                canvas.style.width = '375px';
                canvas.style.margin = '1rem auto';
                break;
            default:
                canvas.style.width = '100%';
                canvas.style.margin = '1rem';
        }
        
        // Update active button
        document.querySelectorAll('.view-btn').forEach(btn => {
            btn.classList.toggle('active', btn.dataset.view === view);
        });
    }

    saveToHistory() {
        const state = this.canvas.innerHTML;
        this.history = this.history.slice(0, this.historyIndex + 1);
        this.history.push(state);
        this.historyIndex++;
        
        // Limit history size
        if (this.history.length > 50) {
            this.history.shift();
            this.historyIndex--;
        }
    }

    undo() {
        if (this.historyIndex > 0) {
            this.historyIndex--;
            this.canvas.innerHTML = this.history[this.historyIndex];
            this.deselectElement();
        }
    }

    redo() {
        if (this.historyIndex < this.history.length - 1) {
            this.historyIndex++;
            this.canvas.innerHTML = this.history[this.historyIndex];
            this.deselectElement();
        }
    }

    zoomIn() {
        this.zoom = Math.min(this.zoom + 0.1, 2);
        this.canvas.style.transform = `scale(${this.zoom})`;
        document.getElementById('zoom-level').textContent = Math.round(this.zoom * 100) + '%';
    }

    zoomOut() {
        this.zoom = Math.max(this.zoom - 0.1, 0.5);
        this.canvas.style.transform = `scale(${this.zoom})`;
        document.getElementById('zoom-level').textContent = Math.round(this.zoom * 100) + '%';
    }

    autoSave() {
        const data = {
            html: this.canvas.innerHTML,
            timestamp: Date.now()
        };
        localStorage.setItem('pagebuilder_autosave', JSON.stringify(data));
        
        // Update status
        const statusElement = document.querySelector('.canvas-status');
        if (statusElement) {
            statusElement.textContent = 'Sauvegardé';
            statusElement.style.background = '#28a745';
            statusElement.style.color = 'white';
        }
    }

    loadAutoSave() {
        const saved = localStorage.getItem('pagebuilder_autosave');
        if (saved) {
            const data = JSON.parse(saved);
            if (data.html && data.html.trim() !== '') {
                this.canvas.innerHTML = data.html;
                this.saveToHistory();
            }
        }
    }

    loadTemplate(templateName) {
        const template = this.templates[templateName];
        if (template) {
            this.canvas.innerHTML = template.html;
            this.saveToHistory();
            this.autoSave();
            console.log(`Loaded template: ${templateName}`);
        }
    }

    initializeTemplates() {
        return {
            landing: {
                name: 'Page d\'Accueil',
                html: `
                    <div class="builder-element" data-type="container" data-id="hero">
                        <div class="builder-container" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 80px 20px; text-align: center; color: white;">
                            <h1 style="font-size: 3rem; margin-bottom: 1rem;">Bienvenue sur Notre Site</h1>
                            <p style="font-size: 1.25rem; margin-bottom: 2rem;">Découvrez nos services exceptionnels</p>
                            <button class="builder-button" style="background: #fff; color: #667eea; padding: 15px 30px; border: none; border-radius: 30px; font-size: 1.1rem; cursor: pointer;">Commencer</button>
                        </div>
                    </div>
                    <div class="builder-element" data-type="container" data-id="features">
                        <div class="builder-container" style="padding: 60px 20px; background: #f8f9fa;">
                            <h2 style="text-align: center; margin-bottom: 3rem; color: #333;">Nos Avantages</h2>
                            <div class="builder-columns" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                                <div style="text-align: center; padding: 2rem; background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                                    <h3>Qualité</h3>
                                    <p>Des services de haute qualité</p>
                                </div>
                                <div style="text-align: center; padding: 2rem; background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                                    <h3>Rapidité</h3>
                                    <p>Intervention rapide et efficace</p>
                                </div>
                                <div style="text-align: center; padding: 2rem; background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                                    <h3>Fiabilité</h3>
                                    <p>Une équipe expérimentée</p>
                                </div>
                            </div>
                        </div>
                    </div>`
            },
            service: {
                name: 'Page Services',
                html: `
                    <div class="builder-element" data-type="heading">
                        <h1 style="text-align: center; color: #333; margin-bottom: 2rem;">Nos Services</h1>
                    </div>
                    <div class="builder-element" data-type="text">
                        <p style="text-align: center; font-size: 1.1rem; color: #666; margin-bottom: 3rem;">Découvrez notre gamme complète de services professionnels</p>
                    </div>
                    <div class="builder-element" data-type="columns">
                        <div class="builder-columns" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin: 2rem 0;">
                            <div class="service-card" style="padding: 2rem; border: 1px solid #e9ecef; border-radius: 8px; text-align: center;">
                                <i class="fas fa-cog" style="font-size: 3rem; color: #007bff; margin-bottom: 1rem;"></i>
                                <h3>Service 1</h3>
                                <p>Description du service 1</p>
                            </div>
                            <div class="service-card" style="padding: 2rem; border: 1px solid #e9ecef; border-radius: 8px; text-align: center;">
                                <i class="fas fa-users" style="font-size: 3rem; color: #28a745; margin-bottom: 1rem;"></i>
                                <h3>Service 2</h3>
                                <p>Description du service 2</p>
                            </div>
                            <div class="service-card" style="padding: 2rem; border: 1px solid #e9ecef; border-radius: 8px; text-align: center;">
                                <i class="fas fa-chart-line" style="font-size: 3rem; color: #ffc107; margin-bottom: 1rem;"></i>
                                <h3>Service 3</h3>
                                <p>Description du service 3</p>
                            </div>
                        </div>
                    </div>`
            },
            contact: {
                name: 'Page Contact',
                html: `
                    <div class="builder-element" data-type="heading">
                        <h1 style="text-align: center; color: #333; margin-bottom: 2rem;">Contactez-nous</h1>
                    </div>
                    <div class="builder-element" data-type="columns">
                        <div class="builder-columns" style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin: 2rem 0;">
                            <div class="contact-info">
                                <h3>Nos Coordonnées</h3>
                                <div style="margin: 1rem 0;">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>123 Rue de la Paix, 75001 Paris</span>
                                </div>
                                <div style="margin: 1rem 0;">
                                    <i class="fas fa-phone"></i>
                                    <span>01 23 45 67 89</span>
                                </div>
                                <div style="margin: 1rem 0;">
                                    <i class="fas fa-envelope"></i>
                                    <span>contact@monsite.fr</span>
                                </div>
                            </div>
                            <div class="contact-form">
                                <form style="display: flex; flex-direction: column; gap: 1rem;">
                                    <input type="text" placeholder="Votre nom" style="padding: 0.75rem; border: 1px solid #dee2e6; border-radius: 4px;">
                                    <input type="email" placeholder="Votre email" style="padding: 0.75rem; border: 1px solid #dee2e6; border-radius: 4px;">
                                    <textarea placeholder="Votre message" rows="5" style="padding: 0.75rem; border: 1px solid #dee2e6; border-radius: 4px; resize: vertical;"></textarea>
                                    <button type="submit" style="padding: 0.75rem; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">Envoyer</button>
                                </form>
                            </div>
                        </div>
                    </div>`
            }
        };
    }

    savePageBuilder() {
        const pageData = {
            title: document.getElementById('canvas-title').textContent,
            content: this.canvas.innerHTML,
            timestamp: Date.now()
        };

        // Send to WordPress via AJAX
        jQuery.post(speedEpavisteAdmin.ajax_url, {
            action: 'save_page_builder',
            nonce: speedEpavisteAdmin.nonce,
            page_data: JSON.stringify(pageData)
        }, (response) => {
            if (response.success) {
                this.showNotification('Page sauvegardée avec succès!', 'success');
                document.querySelector('.canvas-status').textContent = 'Publié';
                document.querySelector('.canvas-status').style.background = '#28a745';
            } else {
                this.showNotification('Erreur lors de la sauvegarde', 'error');
            }
        });
    }

    showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.innerHTML = `
            <i class="fas fa-${type === 'success' ? 'check' : type === 'error' ? 'exclamation-triangle' : 'info-circle'}"></i>
            <span>${message}</span>
            <button onclick="this.parentElement.remove()">×</button>
        `;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.remove();
        }, 5000);
    }
}

// Global functions
function createNewPage() {
    if (confirm('Créer une nouvelle page? Les modifications non sauvegardées seront perdues.')) {
        pageBuilder.canvas.innerHTML = '<div class="canvas-placeholder"><div class="placeholder-content"><i class="fas fa-mouse-pointer"></i><h3>Commencez à créer</h3><p>Glissez des widgets depuis la sidebar pour construire votre page</p></div></div>';
        pageBuilder.deselectElement();
        document.getElementById('canvas-title').textContent = 'Nouvelle Page';
    }
}

function loadTemplate() {
    document.getElementById('templates-modal').classList.add('active');
}

function closeTemplatesModal() {
    document.getElementById('templates-modal').classList.remove('active');
}

function saveAsTemplate() {
    const name = prompt('Nom du modèle:');
    if (name) {
        const template = {
            name: name,
            html: pageBuilder.canvas.innerHTML
        };
        // Save template logic here
        pageBuilder.showNotification(`Modèle "${name}" sauvegardé!`, 'success');
    }
}

function togglePreview() {
    const modal = document.getElementById('preview-modal');
    const iframe = document.getElementById('preview-frame');
    
    // Create preview HTML
    const previewHTML = `
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Aperçu</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
            <style>
                body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; margin: 0; padding: 20px; }
                .builder-element { position: relative; }
                .builder-container { width: 100%; }
                .builder-columns { display: flex; gap: 1rem; }
                .builder-columns > div { flex: 1; }
                .builder-button { display: inline-block; text-decoration: none; }
                .builder-form { max-width: 500px; }
                .builder-form .form-group { margin-bottom: 1rem; }
                .builder-form label { display: block; margin-bottom: 0.5rem; font-weight: 500; }
                .builder-form input, .builder-form textarea { width: 100%; padding: 0.75rem; border: 1px solid #dee2e6; border-radius: 4px; }
                .builder-spacer { width: 100%; }
            </style>
        </head>
        <body>
            ${pageBuilder.canvas.innerHTML.replace(/builder-element/g, 'preview-element').replace(/contenteditable="true"/g, '')}
        </body>
        </html>
    `;
    
    iframe.srcdoc = previewHTML;
    modal.classList.add('active');
}

function closePreviewModal() {
    document.getElementById('preview-modal').classList.remove('active');
}

function undoAction() {
    pageBuilder.undo();
}

function redoAction() {
    pageBuilder.redo();
}

function zoomIn() {
    pageBuilder.zoomIn();
}

function zoomOut() {
    pageBuilder.zoomOut();
}

function closeProperties() {
    pageBuilder.deselectElement();
}

// Initialize when page loads
document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.page-builder-container')) {
        window.pageBuilder = new PageBuilder();
        
        // Template selection
        document.addEventListener('click', function(e) {
            if (e.target.closest('.template-item')) {
                const templateName = e.target.closest('.template-item').dataset.template;
                if (templateName === 'blank') {
                    createNewPage();
                } else {
                    pageBuilder.loadTemplate(templateName);
                }
                closeTemplatesModal();
            }
        });
        
        // Preview view controls
        document.addEventListener('click', function(e) {
            if (e.target.dataset.preview) {
                const view = e.target.dataset.preview;
                const iframe = document.getElementById('preview-frame');
                
                switch(view) {
                    case 'tablet':
                        iframe.style.width = '768px';
                        iframe.style.height = '1024px';
                        break;
                    case 'mobile':
                        iframe.style.width = '375px';
                        iframe.style.height = '667px';
                        break;
                    default:
                        iframe.style.width = '100%';
                        iframe.style.height = '100%';
                }
                
                document.querySelectorAll('[data-preview]').forEach(btn => {
                    btn.classList.toggle('active', btn.dataset.preview === view);
                });
            }
        });
    }
});
