
<?php
// Forms Manager admin panel
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="speed-epaviste-admin">
    <h1>📝 Forms Manager - Speed Épaviste Pro</h1>
    
    <div class="forms-toolbar">
        <button type="button" class="button-primary" onclick="createContactForm()">
            + Nouveau Formulaire
        </button>
        <button type="button" class="button-secondary">
            Modèles
        </button>
        <button type="button" class="button-secondary">
            Exports
        </button>
    </div>

    <div class="forms-list">
        <div class="form-card">
            <h3>Formulaire de Contact Principal</h3>
            <p>Formulaire de contact pour la page d'accueil avec champs nom, email, téléphone et message.</p>
            <div class="form-actions">
                <button type="button" class="button-primary">Modifier</button>
                <button type="button" class="button-secondary">Dupliquer</button>
                <button type="button" class="button-secondary">Voir Soumissions</button>
            </div>
        </div>

        <div class="form-card">
            <h3>Demande de Devis Épave</h3>
            <p>Formulaire spécialisé pour les demandes de devis d'enlèvement d'épaves.</p>
            <div class="form-actions">
                <button type="button" class="button-primary">Modifier</button>
                <button type="button" class="button-secondary">Dupliquer</button>
                <button type="button" class="button-secondary">Voir Soumissions</button>
            </div>
        </div>
    </div>

    <div id="form-builder" class="form-builder hidden">
        <h3>Constructeur de Formulaire</h3>
        
        <div class="form-elements">
            <button class="element-btn" data-type="text">📝 Texte</button>
            <button class="element-btn" data-type="email">📧 Email</button>
            <button class="element-btn" data-type="tel">📞 Téléphone</button>
            <button class="element-btn" data-type="textarea">📄 Message</button>
            <button class="element-btn" data-type="select">📋 Liste</button>
            <button class="element-btn" data-type="checkbox">☑️ Case</button>
            <button class="element-btn" data-type="radio">🔘 Radio</button>
        </div>

        <div class="form-preview">
            <h4>Aperçu du Formulaire</h4>
            <div id="form-preview" class="preview-area">
                <!-- Form preview will be generated here -->
            </div>
        </div>
    </div>
</div>
