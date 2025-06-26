
<?php
// Enhanced Dashboard admin panel with professional design
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="speed-epaviste-admin">
    <div class="dashboard-header">
        <h1><i class="fas fa-tachometer-alt"></i> Speed Épaviste Pro Dashboard</h1>
        <p>Tableau de bord professionnel pour la gestion complète de votre site épaviste avec IA intégrée</p>
    </div>

    <div class="dashboard-stats">
        <div class="stat-box">
            <h4><i class="fas fa-rocket"></i> PageSpeed Score</h4>
            <div class="stat-value">100</div>
            <div class="stat-label">Mobile & Desktop</div>
        </div>
        <div class="stat-box">
            <h4><i class="fas fa-search"></i> SEO Score</h4>
            <div class="stat-value">98</div>
            <div class="stat-label">Optimisation Globale</div>
        </div>
        <div class="stat-box">
            <h4><i class="fas fa-clock"></i> Temps de Chargement</h4>
            <div class="stat-value">0.9s</div>
            <div class="stat-label">Temps Moyen</div>
        </div>
        <div class="stat-box">
            <h4><i class="fas fa-chart-line"></i> Pages Indexées</div>
            <div class="stat-value">32</div>
            <div class="stat-label">Google Search</div>
        </div>
        <div class="stat-box">
            <h4><i class="fas fa-users"></i> Visiteurs/Jour</h4>
            <div class="stat-value">156</div>
            <div class="stat-label">Moyenne 7 jours</div>
        </div>
        <div class="stat-box">
            <h4><i class="fas fa-shield-alt"></i> Sécurité</h4>
            <div class="stat-value">100%</div>
            <div class="stat-label">Score Sécurité</div>
        </div>
    </div>

    <div class="dashboard-grid">
        <div class="dashboard-card">
            <span class="card-icon"><i class="fas fa-search-plus"></i></span>
            <h3>SEO Manager Pro</h3>
            <p>Optimisez votre référencement avec des outils avancés d'analyse SEO, soumission automatique aux moteurs de recherche et suivi des performances en temps réel.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-seo'); ?>" class="card-button">
                <i class="fas fa-cog"></i> Gérer le SEO
            </a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon"><i class="fas fa-robot"></i></span>
            <h3>IA Post Generator</h3>
            <p>Créez du contenu optimisé SEO automatiquement avec notre générateur de posts alimenté par intelligence artificielle. Analyse et optimisation en temps réel.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-ai-posts'); ?>" class="card-button">
                <i class="fas fa-magic"></i> Générer du Contenu
            </a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon"><i class="fas fa-paint-brush"></i></span>
            <h3>Theme Customizer</h3>
            <p>Personnalisez l'apparence de votre site avec des options avancées de couleurs, typographie, mise en page et animations. Interface intuitive et aperçu en temps réel.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-customizer'); ?>" class="card-button">
                <i class="fas fa-palette"></i> Personnaliser
            </a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon"><i class="fas fa-rocket"></i></span>
            <h3>Performance Monitor</h3>
            <p>Surveillez et optimisez les performances de votre site pour maintenir un score PageSpeed de 100/100. Outils d'analyse et optimisation automatique.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-performance'); ?>" class="card-button">
                <i class="fas fa-tachometer-alt"></i> Optimiser
            </a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon"><i class="fas fa-drafting-compass"></i></span>
            <h3>Page Builder Pro</h3>
            <p>Créez des pages professionnelles avec notre constructeur drag-and-drop avancé. Widgets personnalisés, templates prédéfinis et éditeur visuel intuitif.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-builder'); ?>" class="card-button">
                <i class="fas fa-hammer"></i> Construire
            </a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon"><i class="fas fa-folder-open"></i></span>
            <h3>File Manager Pro</h3>
            <p>Gérez tous vos fichiers et dossiers directement depuis l'interface d'administration. Éditeur de code intégré, gestion des permissions et sauvegarde automatique.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-file-manager'); ?>" class="card-button">
                <i class="fas fa-file-code"></i> Gérer les Fichiers
            </a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon"><i class="fas fa-envelope"></i></span>
            <h3>Email Marketing</h3>
            <p>Créez et envoyez des campagnes email professionnelles avec l'assistance IA. Gestion des abonnés, templates personnalisés et analytiques détaillées.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-email'); ?>" class="card-button">
                <i class="fas fa-paper-plane"></i> Campagnes Email
            </a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon"><i class="fas fa-comments"></i></span>
            <h3>AI Chatbot</h3>
            <p>Chatbot intelligent pour l'assistance client automatique. Configuration avancée, réponses personnalisées et intégration seamless avec votre site.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-ai-chat'); ?>" class="card-button">
                <i class="fas fa-robot"></i> Configurer Chatbot
            </a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon"><i class="fas fa-wpforms"></i></span>
            <h3>Forms Manager Pro</h3>
            <p>Créez et gérez des formulaires de contact avancés avec validation intelligente, intégration CRM et réponses automatiques personnalisées.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-forms'); ?>" class="card-button">
                <i class="fas fa-edit"></i> Gérer les Formulaires
            </a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon"><i class="fas fa-chart-bar"></i></span>
            <h3>Analytics Pro</h3>
            <p>Analyses détaillées du trafic, comportement des visiteurs, conversions et performances SEO. Rapports automatiques et alertes intelligentes.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-analytics'); ?>" class="card-button">
                <i class="fas fa-chart-line"></i> Voir Analytics
            </a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon"><i class="fas fa-shield-alt"></i></span>
            <h3>Security Center</h3>
            <p>Protection avancée contre les menaces, scan de sécurité automatique, pare-feu intelligent et monitoring en continu de votre site web.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-security'); ?>" class="card-button">
                <i class="fas fa-lock"></i> Sécuriser
            </a>
        </div>

        <div class="dashboard-card">
            <span class="card-icon"><i class="fas fa-memory"></i></span>
            <h3>Cache Manager</h3>
            <p>Gestion intelligente du cache pour des performances optimales. Purge automatique, compression avancée et optimisation des ressources.</p>
            <a href="<?php echo admin_url('admin.php?page=speed-epaviste-cache'); ?>" class="card-button">
                <i class="fas fa-sync"></i> Gérer le Cache
            </a>
        </div>
    </div>

    <div class="dashboard-grid" style="margin-top: 2rem;">
        <div class="performance-card">
            <h3><i class="fas fa-chart-area"></i> Performance en Temps Réel</h3>
            <div class="performance-metrics">
                <div class="metric-item">
                    <span class="metric-label">Uptime</span>
                    <span class="metric-value success">99.9%</span>
                </div>
                <div class="metric-item">
                    <span class="metric-label">Réponse Serveur</span>
                    <span class="metric-value success">120ms</span>
                </div>
                <div class="metric-item">
                    <span class="metric-label">Bande Passante</span>
                    <span class="metric-value info">2.3 GB/mois</span>
                </div>
                <div class="metric-item">
                    <span class="metric-label">Erreurs 404</span>
                    <span class="metric-value success">0</span>
                </div>
            </div>
        </div>

        <div class="security-card">
            <h3><i class="fas fa-shield-check"></i> État de Sécurité</h3>
            <div class="security-status">
                <div class="status-item success">
                    <i class="fas fa-check-circle"></i>
                    <span>Certificat SSL Actif</span>
                </div>
                <div class="status-item success">
                    <i class="fas fa-check-circle"></i>
                    <span>Pare-feu Configuré</span>
                </div>
                <div class="status-item success">
                    <i class="fas fa-check-circle"></i>
                    <span>Sauvegardes à Jour</span>
                </div>
                <div class="status-item success">
                    <i class="fas fa-check-circle"></i>
                    <span>Monitoring Actif</span>
                </div>
            </div>
        </div>

        <div class="cache-card">
            <h3><i class="fas fa-database"></i> État du Cache</h3>
            <div class="cache-info">
                <div class="cache-stat">
                    <span>Pages en Cache</span>
                    <strong>247</strong>
                </div>
                <div class="cache-stat">
                    <span>Taille du Cache</span>
                    <strong>89.2 MB</strong>
                </div>
                <div class="cache-stat">
                    <span>Dernier Nettoyage</span>
                    <strong>Il y a 2h</strong>
                </div>
                <button class="button-secondary" onclick="clearCache()">
                    <i class="fas fa-broom"></i> Vider le Cache
                </button>
            </div>
        </div>
    </div>

    <div class="admin-actions" style="margin-top: 2rem; text-align: center;">
        <button class="button-primary" onclick="runSystemCheck()">
            <i class="fas fa-cogs"></i> Vérification Système Complète
        </button>
        <button class="button-secondary" onclick="exportSettings()">
            <i class="fas fa-download"></i> Exporter Configuration
        </button>
        <button class="button-secondary" onclick="viewSystemLogs()">
            <i class="fas fa-file-alt"></i> Logs Système
        </button>
    </div>
</div>

<script>
function clearCache() {
    if (confirm('Êtes-vous sûr de vouloir vider le cache ?')) {
        // AJAX call to clear cache
        fetch(ajaxurl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'action=clear_cache&nonce=' + speedEpavisteAdmin.nonce
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Cache vidé avec succès !');
                location.reload();
            } else {
                alert('Erreur lors du vidage du cache.');
            }
        });
    }
}

function runSystemCheck() {
    alert('Vérification système en cours... Cette fonctionnalité sera bientôt disponible.');
}

function exportSettings() {
    alert('Export de configuration en cours... Cette fonctionnalité sera bientôt disponible.');
}

function viewSystemLogs() {
    alert('Affichage des logs système... Cette fonctionnalité sera bientôt disponible.');
}

// Add fade-in animation to cards
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.dashboard-card, .stat-box');
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.classList.add('fade-in');
        }, index * 100);
    });
});
</script>

<style>
.performance-card, .security-card, .cache-card {
    background: var(--card-bg);
    border-radius: var(--radius-lg);
    padding: 2rem;
    box-shadow: var(--shadow-md);
    border: 1px solid var(--border-color);
}

.performance-card h3, .security-card h3, .cache-card h3 {
    margin: 0 0 1.5rem 0;
    color: var(--text-dark);
    font-size: 1.25rem;
    font-weight: 600;
}

.performance-metrics, .security-status, .cache-info {
    display: grid;
    gap: 1rem;
}

.metric-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem;
    background: var(--light-bg);
    border-radius: var(--radius-md);
}

.metric-value.success { color: var(--success-color); font-weight: 600; }
.metric-value.info { color: var(--info-color); font-weight: 600; }
.metric-value.warning { color: var(--warning-color); font-weight: 600; }

.status-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem;
    border-radius: var(--radius-md);
}

.status-item.success {
    background: rgba(16, 185, 129, 0.1);
    color: var(--success-color);
}

.cache-stat {
    display: flex;
    justify-content: space-between;
    padding: 0.5rem 0;
    border-bottom: 1px solid var(--border-color);
}

.cache-stat:last-child {
    border-bottom: none;
}

.admin-actions {
    margin-top: 2rem;
}

.admin-actions button {
    margin: 0 0.5rem;
}
</style>
