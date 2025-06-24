
<?php
// Page Builder admin panel
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="speed-epaviste-admin">
    <h1>🏗️ Page Builder - Speed Épaviste Pro</h1>
    
    <div class="builder-toolbar">
        <button type="button" class="button-primary" onclick="createNewPage()">
            + Nouvelle Page
        </button>
        <button type="button" class="button-primary" onclick="createNewPost()">
            + Nouvel Article
        </button>
        <button type="button" class="button-secondary">
            Modèles
        </button>
        <button type="button" class="button-secondary">
            Sauvegarder
        </button>
    </div>

    <div class="builder-container">
        <div class="builder-sidebar">
            <h3>Éléments</h3>
            <div class="element-list">
                <div class="element-item" data-type="hero">
                    📱 Section Hero
                </div>
                <div class="element-item" data-type="services">
                    🛠️ Services
                </div>
                <div class="element-item" data-type="contact">
                    📞 Contact
                </div>
                <div class="element-item" data-type="faq">
                    ❓ FAQ
                </div>
                <div class="element-item" data-type="testimonials">
                    💬 Témoignages
                </div>
                <div class="element-item" data-type="gallery">
                    🖼️ Galerie
                </div>
            </div>
        </div>

        <div class="builder-canvas">
            <div id="page-canvas" class="canvas-area">
                <div class="canvas-placeholder">
                    Glissez des éléments ici pour construire votre page
                </div>
            </div>
        </div>

        <div class="builder-properties">
            <h3>Propriétés</h3>
            <div class="form-group">
                <label>Titre de la Section</label>
                <input type="text" class="theme-input" placeholder="Titre...">
            </div>
            <div class="form-group">
                <label>Contenu</label>
                <textarea class="theme-input" rows="4" placeholder="Contenu..."></textarea>
            </div>
            <div class="form-group">
                <label>Couleur de Fond</label>
                <input type="color" class="color-picker" value="#ffffff">
            </div>
        </div>
    </div>
</div>
