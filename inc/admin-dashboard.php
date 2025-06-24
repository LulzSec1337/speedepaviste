
<?php
// Dashboard admin panel
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="speed-epaviste-admin">
    <div class="dashboard-header">
        <h1>🚗 Speed Épaviste Pro Dashboard</h1>
        <p>Gérez votre site épaviste avec des outils professionnels pour le SEO et les performances</p>
    </div>

    <div class="dashboard-grid">
        <div class="dashboard-card">
            <span class="card-icon">🔍</span>
            <h3>SEO Manager</h3>
            <p>Optimisez votre référencement avec des outils avancés d'analyse SEO et de soumission automatique aux moteurs de recherche.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-seo'); ?>" class="card-button">Gérer le SEO</a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon">🎨</span>
            <h3>Theme Customizer</h3>
            <p>Personnalisez l'apparence de votre site avec des options de couleurs, typographie et mise en page.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-customizer'); ?>" class="card-button">Personnaliser</a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon">⚡</span>
            <h3>Performance</h3>
            <p>Surveillez et optimisez les performances de votre site pour un score PageSpeed de 100/100.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-performance'); ?>" class="card-button">Optimiser</a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon">🏗️</span>
            <h3>Page Builder</h3>
            <p>Créez des pages personnalisées avec notre constructeur de pages drag-and-drop intuitif.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-builder'); ?>" class="card-button">Construire</a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon">📝</span>
            <h3>Forms Manager</h3>
            <p>Créez et gérez des formulaires de contact personnalisés pour votre site épaviste.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-forms'); ?>" class="card-button">Gérer</a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon">📊</span>
            <h3>Analytics</h3>
            <p>Suivez les performances de votre site avec des statistiques détaillées.</p>
            <a href="#" class="card-button">Voir Stats</a>
        </div>
    </div>

    <div class="dashboard-stats">
        <div class="stat-box">
            <h4>PageSpeed Score</h4>
            <div class="stat-value">98</div>
            <div class="stat-label">Mobile</div>
        </div>
        <div class="stat-box">
            <h4>SEO Score</h4>
            <div class="stat-value">95</div>
            <div class="stat-label">Global</div>
        </div>
        <div class="stat-box">
            <h4>Temps de Chargement</h4>
            <div class="stat-value">1.2s</div>
            <div class="stat-label">Moyenne</div>
        </div>
        <div class="stat-box">
            <h4>Pages Indexées</h4>
            <div class="stat-value">24</div>
            <div class="stat-label">Google</div>
        </div>
    </div>
</div>
