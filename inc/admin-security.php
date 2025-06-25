
<?php
// Security admin panel
if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="speed-epaviste-admin">
    <div class="dashboard-header">
        <h1>🔒 Sécurité & Protection</h1>
        <p>Protégez votre site contre les menaces et surveillez la sécurité</p>
    </div>

    <div class="security-overview">
        <div class="security-score">
            <div class="score-circle">
                <span class="score-value">95</span>
                <span class="score-label">Score Sécurité</span>
            </div>
            <div class="score-details">
                <div class="score-item good">✓ Firewall Actif</div>
                <div class="score-item good">✓ SSL Certificat</div>
                <div class="score-item good">✓ Mots de passe forts</div>
                <div class="score-item warning">⚠ 2FA à configurer</div>
            </div>
        </div>
    </div>

    <div class="security-sections">
        <div class="security-card">
            <h3>🛡️ Protection Firewall</h3>
            <div class="security-setting">
                <label class="security-toggle">
                    <input type="checkbox" checked>
                    <span class="toggle-slider">Firewall Web Application</span>
                </label>
            </div>
            <div class="security-setting">
                <label class="security-toggle">
                    <input type="checkbox" checked>
                    <span class="toggle-slider">Protection DDoS</span>
                </label>
            </div>
            <div class="security-setting">
                <label class="security-toggle">
                    <input type="checkbox" checked>
                    <span class="toggle-slider">Blocage IP Malveillantes</span>
                </label>
            </div>
        </div>

        <div class="security-card">
            <h3>🔐 Authentification</h3>
            <div class="security-setting">
                <label class="security-toggle">
                    <input type="checkbox">
                    <span class="toggle-slider">Authentification à 2 Facteurs</span>
                </label>
            </div>
            <div class="security-setting">
                <label class="security-toggle">
                    <input type="checkbox" checked>
                    <span class="toggle-slider">Limitation Tentatives Connexion</span>
                </label>
            </div>
            <div class="security-setting">
                <label class="security-toggle">
                    <input type="checkbox" checked>
                    <span class="toggle-slider">Masquer wp-admin</span>
                </label>
            </div>
        </div>

        <div class="security-card">
            <h3>🕵️ Surveillance</h3>
            <div class="monitoring-stats">
                <div class="monitor-item">
                    <span class="monitor-label">Tentatives Bloquées (24h)</span>
                    <span class="monitor-value">127</span>
                </div>
                <div class="monitor-item">
                    <span class="monitor-label">Malware Détecté</span>
                    <span class="monitor-value">0</span>
                </div>
                <div class="monitor-item">
                    <span class="monitor-label">Dernière Analyse</span>
                    <span class="monitor-value">Il y a 2h</span>
                </div>
            </div>
            <button class="button-primary" onclick="runSecurityScan()">Lancer Analyse Complète</button>
        </div>

        <div class="security-card">
            <h3>🔄 Sauvegardes</h3>
            <div class="backup-settings">
                <div class="form-group">
                    <label>Fréquence des Sauvegardes</label>
                    <select class="theme-input">
                        <option>Quotidienne</option>
                        <option>Hebdomadaire</option>
                        <option>Mensuelle</option>
                    </select>
                </div>
                <div class="backup-list">
                    <div class="backup-item">
                        <span class="backup-date">25/06/2024 14:30</span>
                        <span class="backup-size">245 MB</span>
                        <button class="button-secondary">Restaurer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
