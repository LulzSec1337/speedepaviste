
<?php
// Analytics admin panel
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="speed-epaviste-admin">
    <div class="dashboard-header">
        <h1>📊 Analytics & Visitor Tracking</h1>
        <p>Surveillez les performances et le trafic de votre site en temps réel</p>
    </div>

    <div class="analytics-tabs">
        <button class="analytics-tab active" data-tab="overview">Vue d'ensemble</button>
        <button class="analytics-tab" data-tab="visitors">Visiteurs</button>
        <button class="analytics-tab" data-tab="traffic">Trafic</button>
        <button class="analytics-tab" data-tab="conversions">Conversions</button>
        <button class="analytics-tab" data-tab="reports">Rapports</button>
    </div>

    <div id="overview" class="analytics-tab-content active">
        <div class="dashboard-stats">
            <div class="stat-box">
                <h4>Visiteurs Aujourd'hui</h4>
                <div class="stat-value" id="visitors-today">247</div>
                <div class="stat-label">+12% vs hier</div>
            </div>
            <div class="stat-box">
                <h4>Pages Vues</h4>
                <div class="stat-value" id="page-views">1,834</div>
                <div class="stat-label">+8% vs hier</div>
            </div>
            <div class="stat-box">
                <h4>Taux de Rebond</h4>
                <div class="stat-value" id="bounce-rate">32%</div>
                <div class="stat-label">-5% vs hier</div>
            </div>
            <div class="stat-box">
                <h4>Temps Moyen</h4>
                <div class="stat-value" id="avg-time">2:45</div>
                <div class="stat-label">+15s vs hier</div>
            </div>
        </div>

        <div class="analytics-charts">
            <div class="chart-container">
                <h3>Visiteurs des 7 derniers jours</h3>
                <canvas id="visitors-chart" width="800" height="300"></canvas>
            </div>
            <div class="chart-container">
                <h3>Sources de Trafic</h3>
                <canvas id="traffic-sources-chart" width="400" height="300"></canvas>
            </div>
        </div>
    </div>

    <div id="visitors" class="analytics-tab-content">
        <div class="visitor-section">
            <h3>Visiteurs en Temps Réel</h3>
            <div class="real-time-visitors">
                <div class="visitor-count">
                    <span class="count" id="live-visitors">12</span>
                    <span class="label">visiteurs en ligne</span>
                </div>
                <div class="visitor-locations" id="visitor-map">
                    <!-- Interactive map will be rendered here -->
                </div>
            </div>
        </div>

        <div class="visitor-details">
            <h3>Détails des Visiteurs</h3>
            <table class="visitor-table">
                <thead>
                    <tr>
                        <th>IP</th>
                        <th>Localisation</th>
                        <th>Navigateur</th>
                        <th>Page</th>
                        <th>Temps</th>
                    </tr>
                </thead>
                <tbody id="visitor-list">
                    <!-- Will be populated by JavaScript -->
                </tbody>
            </table>
        </div>
    </div>

    <div id="traffic" class="analytics-tab-content">
        <div class="traffic-analysis">
            <h3>Analyse du Trafic</h3>
            <div class="traffic-sources">
                <div class="source-card">
                    <h4>Recherche Organique</h4>
                    <div class="source-stats">
                        <span class="percentage">65%</span>
                        <span class="count">1,592 visiteurs</span>
                    </div>
                </div>
                <div class="source-card">
                    <h4>Trafic Direct</h4>
                    <div class="source-stats">
                        <span class="percentage">20%</span>
                        <span class="count">489 visiteurs</span>
                    </div>
                </div>
                <div class="source-card">
                    <h4>Réseaux Sociaux</h4>
                    <div class="source-stats">
                        <span class="percentage">10%</span>
                        <span class="count">245 visiteurs</span>
                    </div>
                </div>
                <div class="source-card">
                    <h4>Références</h4>
                    <div class="source-stats">
                        <span class="percentage">5%</span>
                        <span class="count">122 visiteurs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="conversions" class="analytics-tab-content">
        <div class="conversion-tracking">
            <h3>Suivi des Conversions</h3>
            <div class="conversion-goals">
                <div class="goal-card">
                    <h4>Demandes de Devis</h4>
                    <div class="goal-stats">
                        <span class="count">24</span>
                        <span class="rate">Taux: 3.2%</span>
                    </div>
                </div>
                <div class="goal-card">
                    <h4>Appels Téléphoniques</h4>
                    <div class="goal-stats">
                        <span class="count">18</span>
                        <span class="rate">Taux: 2.4%</span>
                    </div>
                </div>
                <div class="goal-card">
                    <h4>Formulaires Contact</h4>
                    <div class="goal-stats">
                        <span class="count">41</span>
                        <span class="rate">Taux: 5.5%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="reports" class="analytics-tab-content">
        <div class="reports-section">
            <h3>Rapports Automatisés</h3>
            <div class="report-settings">
                <div class="form-group">
                    <label>Fréquence des Rapports</label>
                    <select class="theme-input">
                        <option>Quotidien</option>
                        <option>Hebdomadaire</option>
                        <option>Mensuel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Email de Réception</label>
                    <input type="email" class="theme-input" value="<?php echo get_option('admin_email'); ?>">
                </div>
                <button class="button-primary">Sauvegarder Paramètres</button>
            </div>
        </div>
    </div>
</div>
