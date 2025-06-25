
<?php
// Advanced Page Builder admin panel
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="speed-epaviste-admin page-builder-container">
    <div class="builder-header">
        <div class="header-left">
            <h1>🏗️ Visual Page Builder Pro</h1>
            <div class="builder-actions">
                <button type="button" class="btn-primary" onclick="createNewPage()">
                    <i class="fas fa-plus"></i> Nouvelle Page
                </button>
                <button type="button" class="btn-secondary" onclick="loadTemplate()">
                    <i class="fas fa-file-import"></i> Charger Modèle
                </button>
                <button type="button" class="btn-secondary" onclick="saveAsTemplate()">
                    <i class="fas fa-save"></i> Sauver Modèle
                </button>
                <button type="button" class="btn-success" onclick="savePageBuilder()">
                    <i class="fas fa-check"></i> Publier
                </button>
            </div>
        </div>
        <div class="header-right">
            <div class="view-controls">
                <button class="view-btn active" data-view="desktop">
                    <i class="fas fa-desktop"></i>
                </button>
                <button class="view-btn" data-view="tablet">
                    <i class="fas fa-tablet-alt"></i>
                </button>
                <button class="view-btn" data-view="mobile">
                    <i class="fas fa-mobile-alt"></i>
                </button>
            </div>
            <button class="btn-secondary" onclick="togglePreview()">
                <i class="fas fa-eye"></i> Aperçu
            </button>
        </div>
    </div>

    <div class="builder-workspace">
        <!-- Widgets Sidebar -->
        <div class="widgets-sidebar">
            <div class="sidebar-header">
                <h3><i class="fas fa-th-large"></i> Widgets</h3>
                <div class="search-widgets">
                    <input type="text" placeholder="Rechercher..." id="widget-search">
                </div>
            </div>
            
            <div class="widget-categories">
                <div class="widget-category active" data-category="all">
                    <span>Tous</span>
                </div>
                <div class="widget-category" data-category="layout">
                    <span>Mise en Page</span>
                </div>
                <div class="widget-category" data-category="content">
                    <span>Contenu</span>
                </div>
                <div class="widget-category" data-category="media">
                    <span>Média</span>
                </div>
                <div class="widget-category" data-category="forms">
                    <span>Formulaires</span>
                </div>
                <div class="widget-category" data-category="seo">
                    <span>SEO</span>
                </div>
            </div>

            <div class="widgets-list">
                <!-- Layout Widgets -->
                <div class="widget-item" data-widget="container" data-category="layout" draggable="true">
                    <div class="widget-icon">📦</div>
                    <div class="widget-info">
                        <h4>Container</h4>
                        <p>Section conteneur</p>
                    </div>
                </div>
                
                <div class="widget-item" data-widget="columns" data-category="layout" draggable="true">
                    <div class="widget-icon">📏</div>
                    <div class="widget-info">
                        <h4>Colonnes</h4>
                        <p>Système de grille</p>
                    </div>
                </div>

                <div class="widget-item" data-widget="spacer" data-category="layout" draggable="true">
                    <div class="widget-icon">📐</div>
                    <div class="widget-info">
                        <h4>Espaceur</h4>
                        <p>Espace vertical</p>
                    </div>
                </div>

                <!-- Content Widgets -->
                <div class="widget-item" data-widget="heading" data-category="content" draggable="true">
                    <div class="widget-icon">📝</div>
                    <div class="widget-info">
                        <h4>Titre</h4>
                        <p>H1, H2, H3...</p>
                    </div>
                </div>

                <div class="widget-item" data-widget="text" data-category="content" draggable="true">
                    <div class="widget-icon">📄</div>
                    <div class="widget-info">
                        <h4>Texte</h4>
                        <p>Paragraphe de texte</p>
                    </div>
                </div>

                <div class="widget-item" data-widget="button" data-category="content" draggable="true">
                    <div class="widget-icon">🔘</div>
                    <div class="widget-info">
                        <h4>Bouton</h4>
                        <p>Bouton CTA</p>
                    </div>
                </div>

                <div class="widget-item" data-widget="list" data-category="content" draggable="true">
                    <div class="widget-icon">📋</div>
                    <div class="widget-info">
                        <h4>Liste</h4>
                        <p>Liste à puces</p>
                    </div>
                </div>

                <!-- Media Widgets -->
                <div class="widget-item" data-widget="image" data-category="media" draggable="true">
                    <div class="widget-icon">🖼️</div>
                    <div class="widget-info">
                        <h4>Image</h4>
                        <p>Image responsive</p>
                    </div>
                </div>

                <div class="widget-item" data-widget="gallery" data-category="media" draggable="true">
                    <div class="widget-icon">🖼️</div>
                    <div class="widget-info">
                        <h4>Galerie</h4>
                        <p>Galerie d'images</p>
                    </div>
                </div>

                <div class="widget-item" data-widget="video" data-category="media" draggable="true">
                    <div class="widget-icon">🎥</div>
                    <div class="widget-info">
                        <h4>Vidéo</h4>
                        <p>Lecteur vidéo</p>
                    </div>
                </div>

                <!-- Form Widgets -->
                <div class="widget-item" data-widget="contact-form" data-category="forms" draggable="true">
                    <div class="widget-icon">📧</div>
                    <div class="widget-info">
                        <h4>Formulaire Contact</h4>
                        <p>Form de contact</p>
                    </div>
                </div>

                <div class="widget-item" data-widget="newsletter" data-category="forms" draggable="true">
                    <div class="widget-icon">📮</div>
                    <div class="widget-info">
                        <h4>Newsletter</h4>
                        <p>Inscription email</p>
                    </div>
                </div>

                <!-- SEO Widgets -->
                <div class="widget-item" data-widget="breadcrumb" data-category="seo" draggable="true">
                    <div class="widget-icon">🍞</div>
                    <div class="widget-info">
                        <h4>Fil d'Ariane</h4>
                        <p>Navigation SEO</p>
                    </div>
                </div>

                <div class="widget-item" data-widget="schema" data-category="seo" draggable="true">
                    <div class="widget-icon">🏷️</div>
                    <div class="widget-info">
                        <h4>Schema Markup</h4>
                        <p>Données structurées</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Canvas Area -->
        <div class="canvas-container">
            <div class="canvas-toolbar">
                <div class="canvas-info">
                    <span id="canvas-title">Nouvelle Page</span>
                    <span class="canvas-status">Non sauvegardé</span>
                </div>
                <div class="canvas-controls">
                    <button class="btn-icon" onclick="undoAction()">
                        <i class="fas fa-undo"></i>
                    </button>
                    <button class="btn-icon" onclick="redoAction()">
                        <i class="fas fa-redo"></i>
                    </button>
                    <div class="zoom-controls">
                        <button class="btn-icon" onclick="zoomOut()">
                            <i class="fas fa-search-minus"></i>
                        </button>
                        <span id="zoom-level">100%</span>
                        <button class="btn-icon" onclick="zoomIn()">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="canvas-area" id="page-canvas">
                <div class="canvas-placeholder">
                    <div class="placeholder-content">
                        <i class="fas fa-mouse-pointer"></i>
                        <h3>Commencez à créer</h3>
                        <p>Glissez des widgets depuis la sidebar pour construire votre page</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Properties Panel -->
        <div class="properties-panel">
            <div class="panel-header">
                <h3><i class="fas fa-cog"></i> Propriétés</h3>
                <button class="btn-icon" onclick="closeProperties()">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <div class="properties-content" id="properties-content">
                <div class="no-selection">
                    <div class="empty-state">
                        <i class="fas fa-cursor"></i>
                        <p>Sélectionnez un élément pour voir ses propriétés</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Templates Modal -->
    <div id="templates-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Choisir un Modèle</h3>
                <button class="modal-close" onclick="closeTemplatesModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="templates-grid">
                    <div class="template-item" data-template="landing">
                        <div class="template-preview">
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjE1MCIgdmlld0JveD0iMCAwIDIwMCAxNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIyMDAiIGhlaWdodD0iMTUwIiBmaWxsPSIjRjNGNEY2Ii8+CjxyZWN0IHg9IjIwIiB5PSIyMCIgd2lkdGg9IjE2MCIgaGVpZ2h0PSIzMCIgZmlsbD0iIzM3NDE1MSIvPgo8cmVjdCB4PSIyMCIgeT0iNjAiIHdpZHRoPSIxNjAiIGhlaWdodD0iMTAiIGZpbGw9IiM5Q0EzQUYiLz4KPHJlY3QgeD0iMjAiIHk9IjgwIiB3aWR0aD0iMTIwIiBoZWlnaHQ9IjEwIiBmaWxsPSIjOUNBM0FGIi8+CjxyZWN0IHg9IjIwIiB5PSIxMTAiIHdpZHRoPSI4MCIgaGVpZ2h0PSIyMCIgZmlsbD0iIzM3NDE1MSIvPgo8L3N2Zz4K" alt="Landing Page">
                        </div>
                        <h4>Page d'Accueil</h4>
                        <p>Modèle moderne pour site vitrine</p>
                    </div>
                    <div class="template-item" data-template="service">
                        <div class="template-preview">
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjE1MCIgdmlld0JveD0iMCAwIDIwMCAxNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIyMDAiIGhlaWdodD0iMTUwIiBmaWxsPSIjRjNGNEY2Ii8+CjxyZWN0IHg9IjIwIiB5PSIyMCIgd2lkdGg9IjE2MCIgaGVpZ2h0PSIyMCIgZmlsbD0iIzM3NDE1MSIvPgo8cmVjdCB4PSIyMCIgeT0iNTAiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgZmlsbD0iIzlDQTNBRiIvPgo8cmVjdCB4PSI3MCIgeT0iNTAiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgZmlsbD0iIzlDQTNBRiIvPgo8cmVjdCB4PSIxMjAiIHk9IjUwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIGZpbGw9IiM5Q0EzQUYiLz4KPHJlY3QgeD0iMjAiIHk9IjEwMCIgd2lkdGg9IjE2MCIgaGVpZ2h0PSIxMCIgZmlsbD0iIzlDQTNBRiIvPgo8L3N2Zz4K" alt="Services Page">
                        </div>
                        <h4>Page Services</h4>
                        <p>Présentation de services professionnels</p>
                    </div>
                    <div class="template-item" data-template="contact">
                        <div class="template-preview">
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjE1MCIgdmlld0JveD0iMCAwIDIwMCAxNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIyMDAiIGhlaWdodD0iMTUwIiBmaWxsPSIjRjNGNEY2Ii8+CjxyZWN0IHg9IjIwIiB5PSIyMCIgd2lkdGg9IjE2MCIgaGVpZ2h0PSIyMCIgZmlsbD0iIzM3NDE1MSIvPgo8cmVjdCB4PSIyMCIgeT0iNTAiIHdpZHRoPSI3MCIgaGVpZ2h0PSI4MCIgZmlsbD0iIzlDQTNBRiIvPgo8cmVjdCB4PSIxMTAiIHk9IjUwIiB3aWR0aD0iNzAiIGhlaWdodD0iODAiIGZpbGw9IiM5Q0EzQUYiLz4KPC9zdmc+Cg==" alt="Contact Page">
                        </div>
                        <h4>Page Contact</h4>
                        <p>Formulaire de contact et infos</p>
                    </div>
                    <div class="template-item" data-template="blank">
                        <div class="template-preview blank">
                            <i class="fas fa-plus"></i>
                        </div>
                        <h4>Page Vierge</h4>
                        <p>Commencer avec une page vide</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Preview Modal -->
    <div id="preview-modal" class="modal preview-modal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="preview-controls">
                    <button class="view-btn active" data-preview="desktop">
                        <i class="fas fa-desktop"></i> Desktop
                    </button>
                    <button class="view-btn" data-preview="tablet">
                        <i class="fas fa-tablet-alt"></i> Tablet
                    </button>
                    <button class="view-btn" data-preview="mobile">
                        <i class="fas fa-mobile-alt"></i> Mobile
                    </button>
                </div>
                <button class="modal-close" onclick="closePreviewModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="preview-container">
                    <iframe id="preview-frame" src="about:blank"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.page-builder-container {
    background: #f8f9fa;
    min-height: 100vh;
}

.builder-header {
    background: white;
    border-bottom: 1px solid #e9ecef;
    padding: 1rem 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 32px;
    z-index: 100;
}

.header-left h1 {
    margin: 0 0 0.5rem 0;
    font-size: 1.5rem;
    color: #2c3e50;
}

.builder-actions {
    display: flex;
    gap: 0.5rem;
}

.builder-actions button {
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 0.875rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.2s;
}

.btn-primary {
    background: #007bff;
    color: white;
}

.btn-primary:hover {
    background: #0056b3;
}

.btn-secondary {
    background: #6c757d;
    color: white;
}

.btn-secondary:hover {
    background: #545b62;
}

.btn-success {
    background: #28a745;
    color: white;
}

.btn-success:hover {
    background: #1e7e34;
}

.view-controls {
    display: flex;
    gap: 0.25rem;
    margin-right: 1rem;
}

.view-btn {
    padding: 0.5rem;
    background: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.2s;
}

.view-btn.active,
.view-btn:hover {
    background: #007bff;
    color: white;
    border-color: #007bff;
}

.builder-workspace {
    display: flex;
    height: calc(100vh - 120px);
}

.widgets-sidebar {
    width: 280px;
    background: white;
    border-right: 1px solid #e9ecef;
    display: flex;
    flex-direction: column;
}

.sidebar-header {
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
}

.sidebar-header h3 {
    margin: 0 0 1rem 0;
    color: #2c3e50;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.search-widgets input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #dee2e6;
    border-radius: 4px;
    font-size: 0.875rem;
}

.widget-categories {
    display: flex;
    flex-wrap: wrap;
    gap: 0.25rem;
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
}

.widget-category {
    padding: 0.25rem 0.75rem;
    background: #f8f9fa;
    border-radius: 20px;
    cursor: pointer;
    font-size: 0.75rem;
    transition: all 0.2s;
}

.widget-category.active,
.widget-category:hover {
    background: #007bff;
    color: white;
}

.widgets-list {
    flex: 1;
    overflow-y: auto;
    padding: 1rem;
}

.widget-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 0.75rem;
    background: white;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    margin-bottom: 0.5rem;
    cursor: grab;
    transition: all 0.2s;
}

.widget-item:hover {
    border-color: #007bff;
    box-shadow: 0 2px 8px rgba(0,123,255,0.1);
}

.widget-item:active {
    cursor: grabbing;
}

.widget-icon {
    font-size: 1.5rem;
    min-width: 2rem;
    text-align: center;
}

.widget-info h4 {
    margin: 0;
    font-size: 0.875rem;
    color: #2c3e50;
}

.widget-info p {
    margin: 0;
    font-size: 0.75rem;
    color: #6c757d;
}

.canvas-container {
    flex: 1;
    display: flex;
    flex-direction: column;
    background: #f8f9fa;
}

.canvas-toolbar {
    background: white;
    border-bottom: 1px solid #e9ecef;
    padding: 0.75rem 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.canvas-info {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.canvas-info #canvas-title {
    font-weight: 600;
    color: #2c3e50;
}

.canvas-status {
    padding: 0.25rem 0.5rem;
    background: #ffc107;
    color: #212529;
    border-radius: 4px;
    font-size: 0.75rem;
}

.canvas-controls {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.btn-icon {
    padding: 0.5rem;
    background: transparent;
    border: 1px solid #dee2e6;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.2s;
}

.btn-icon:hover {
    background: #f8f9fa;
}

.zoom-controls {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

#zoom-level {
    min-width: 50px;
    text-align: center;
    font-size: 0.875rem;
}

.canvas-area {
    flex: 1;
    background: white;
    margin: 1rem;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    position: relative;
    overflow: auto;
}

.canvas-placeholder {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.placeholder-content {
    text-align: center;
    color: #9ca3af;
}

.placeholder-content i {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.placeholder-content h3 {
    margin: 0 0 0.5rem 0;
    font-size: 1.25rem;
}

.placeholder-content p {
    margin: 0;
    font-size: 0.875rem;
}

.properties-panel {
    width: 320px;
    background: white;
    border-left: 1px solid #e9ecef;
    display: flex;
    flex-direction: column;
}

.panel-header {
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.panel-header h3 {
    margin: 0;
    color: #2c3e50;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.properties-content {
    flex: 1;
    overflow-y: auto;
}

.no-selection {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.empty-state {
    text-align: center;
    color: #9ca3af;
}

.empty-state i {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.empty-state p {
    margin: 0;
    font-size: 0.875rem;
}

/* Modal Styles */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 1000;
    align-items: center;
    justify-content: center;
}

.modal.active {
    display: flex;
}

.modal-content {
    background: white;
    border-radius: 8px;
    max-width: 90vw;
    max-height: 90vh;
    overflow: hidden;
    display: flex;
    flex-direction: column;
}

.modal-header {
    padding: 1rem 2rem;
    border-bottom: 1px solid #e9ecef;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.modal-header h3 {
    margin: 0;
    color: #2c3e50;
}

.modal-close {
    background: none;
    border: none;
    font-size: 1.25rem;
    cursor: pointer;
    padding: 0.5rem;
    border-radius: 4px;
}

.modal-close:hover {
    background: #f8f9fa;
}

.modal-body {
    padding: 2rem;
    overflow-y: auto;
    flex: 1;
}

.templates-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 1.5rem;
}

.template-item {
    border: 1px solid #e9ecef;
    border-radius: 8px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.2s;
}

.template-item:hover {
    border-color: #007bff;
    box-shadow: 0 4px 12px rgba(0,123,255,0.15);
}

.template-preview {
    height: 150px;
    background: #f8f9fa;
    display: flex;
    align-items: center;
    justify-content: center;
}

.template-preview.blank {
    border: 2px dashed #dee2e6;
}

.template-preview.blank i {
    font-size: 2rem;
    color: #9ca3af;
}

.template-preview img {
    max-width: 100%;
    max-height: 100%;
}

.template-item h4 {
    margin: 0;
    padding: 1rem 1rem 0.5rem;
    color: #2c3e50;
}

.template-item p {
    margin: 0;
    padding: 0 1rem 1rem;
    color: #6c757d;
    font-size: 0.875rem;
}

.preview-modal .modal-content {
    width: 95vw;
    height: 95vh;
}

.preview-container {
    height: 100%;
}

.preview-container iframe {
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 4px;
}

/* Drag and Drop States */
.widget-item.dragging {
    opacity: 0.5;
}

.canvas-area.drag-over {
    border: 2px dashed #007bff;
    background: rgba(0,123,255,0.05);
}

.element-selected {
    outline: 2px solid #007bff;
    outline-offset: 2px;
}

.element-hover {
    outline: 1px solid #28a745;
    outline-offset: 1px;
}

/* Responsive */
@media (max-width: 1024px) {
    .widgets-sidebar {
        width: 250px;
    }
    
    .properties-panel {
        width: 280px;
    }
}

@media (max-width: 768px) {
    .builder-workspace {
        flex-direction: column;
    }
    
    .widgets-sidebar,
    .properties-panel {
        width: 100%;
        height: 200px;
    }
    
    .canvas-container {
        height: calc(100vh - 520px);
    }
}
</style>
