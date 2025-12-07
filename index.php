<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Big Bull Cheats - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #0c0c0c 0%, #1a1a2e 50%, #16213e 100%);
            color: #e0e0e0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            width: 100%;
            max-width: 500px;
        }
        
        .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .logo h1 {
            font-size: 2.5rem;
            background: linear-gradient(135deg, #ffd700 0%, #ff8c00 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 15px rgba(255, 215, 0, 0.3);
            margin-bottom: 5px;
        }
        
        .logo p {
            color: #aaa;
            font-size: 1rem;
        }
        
        .password-info {
            background: rgba(255, 215, 0, 0.1);
            border: 1px solid #ffd700;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .password-info h3 {
            color: #ffd700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .get-password-btn {
            background: linear-gradient(135deg, #ffd700 0%, #ff8c00 100%);
            color: #000;
            border: none;
            border-radius: 8px;
            padding: 12px 25px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 10px 0;
            width: 100%;
        }
        
        .get-password-btn:hover {
            background: linear-gradient(135deg, #ff8c00 0%, #ffd700 100%);
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.5);
            transform: translateY(-2px);
        }
        
        .password-timer {
            color: #ff8c00;
            font-size: 0.9rem;
            margin-top: 10px;
        }
        
        .login-card {
            background: rgba(25, 25, 35, 0.9);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            border: 1px solid #333;
            backdrop-filter: blur(10px);
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 25px;
        }
        
        .login-header h2 {
            font-size: 1.8rem;
            margin-bottom: 8px;
            color: #f0f0f0;
        }
        
        .login-header p {
            color: #aaa;
            font-size: 0.9rem;
        }
        
        .input-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: #ccc;
        }
        
        .input-group input {
            width: 100%;
            padding: 14px 15px 14px 45px;
            background: rgba(40, 40, 50, 0.7);
            border: 1px solid #444;
            border-radius: 8px;
            color: #fff;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .input-group input:focus {
            outline: none;
            border-color: #ffd700;
            box-shadow: 0 0 0 2px rgba(255, 215, 0, 0.2);
        }
        
        .input-icon {
            position: absolute;
            left: 15px;
            top: 40px;
            color: #777;
            font-size: 1.1rem;
        }
        
        .generate-btn {
            background: linear-gradient(135deg, #ffd700 0%, #ff8c00 100%);
            color: #000;
            border: none;
            border-radius: 8px;
            padding: 12px 25px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 10px 0;
            width: 100%;
        }
        
        .generate-btn:hover {
            background: linear-gradient(135deg, #ff8c00 0%, #ffd700 100%);
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.5);
            transform: translateY(-2px);
        }
        
        .btn-login {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }
        
        .btn-login:hover {
            background: linear-gradient(135deg, #45a049 0%, #4CAF50 100%);
            box-shadow: 0 0 15px rgba(76, 175, 80, 0.5);
            transform: translateY(-2px);
        }
        
        .account-created-section {
            background: rgba(40, 40, 50, 0.7);
            border: 2px solid #4CAF50;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
            display: none;
        }
        
        .account-created-section h3 {
            color: #4CAF50;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        .credentials-box {
            background: rgba(30, 30, 40, 0.7);
            border-radius: 8px;
            padding: 15px;
            margin: 15px 0;
        }
        
        .credential-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 0;
            padding: 10px;
            background: rgba(20, 20, 30, 0.7);
            border-radius: 5px;
        }
        
        .cred-label {
            color: #ffd700;
            font-weight: bold;
        }
        
        .cred-value {
            color: white;
            font-family: monospace;
            font-size: 1.1rem;
        }
        
        .copy-btn {
            background: #333;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .admin-section {
            margin-top: 25px;
            padding: 20px;
            background: rgba(40, 40, 50, 0.5);
            border-radius: 10px;
            border: 1px solid #444;
            display: none;
        }
        
        .admin-section h3 {
            color: #ffd700;
            margin-bottom: 15px;
            text-align: center;
        }
        
        .admin-tabs {
            display: flex;
            gap: 5px;
            margin-bottom: 15px;
            border-bottom: 1px solid #444;
            padding-bottom: 10px;
        }
        
        .tab-btn {
            flex: 1;
            padding: 8px;
            background: #333;
            color: #aaa;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
        }
        
        .tab-btn.active {
            background: #ffd700;
            color: #000;
            font-weight: bold;
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
        }
        
        .admin-input {
            margin-bottom: 15px;
        }
        
        .admin-input label {
            display: block;
            margin-bottom: 5px;
            color: #ccc;
            font-size: 0.9rem;
        }
        
        .admin-input input, .admin-input textarea {
            width: 100%;
            padding: 10px;
            background: rgba(30, 30, 40, 0.7);
            border: 1px solid #555;
            border-radius: 5px;
            color: #fff;
        }
        
        .admin-input textarea {
            min-height: 100px;
            resize: vertical;
            font-family: monospace;
        }
        
        .btn-admin {
            padding: 10px 20px;
            background: linear-gradient(135deg, #ff4444 0%, #cc0000 100%);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            margin-top: 10px;
        }
        
        .btn-admin-green {
            padding: 10px 20px;
            background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            margin-top: 10px;
        }
        
        .security-notice {
            margin-top: 20px;
            padding: 15px;
            background: rgba(255, 215, 0, 0.1);
            border-radius: 8px;
            border-left: 4px solid #ffd700;
            font-size: 0.85rem;
            text-align: center;
        }
        
        .security-notice i {
            color: #ffd700;
            margin-right: 5px;
        }
        
        .user-stats {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
            text-align: center;
        }
        
        .stat {
            padding: 10px;
        }
        
        .stat-number {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffd700;
        }
        
        .stat-label {
            font-size: 0.8rem;
            color: #aaa;
        }
        
        .generating-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        
        .generating-content {
            background: rgba(25, 25, 35, 0.95);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            max-width: 400px;
            width: 90%;
            border: 2px solid #ffd700;
            box-shadow: 0 0 30px rgba(255, 215, 0, 0.3);
        }
        
        .generating-content h3 {
            color: #ffd700;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        
        .generating-text {
            color: #ff8c00;
            font-size: 1.1rem;
            margin: 25px 0;
        }
        
        .countdown {
            font-size: 2rem;
            font-weight: bold;
            color: #ffd700;
            margin: 20px 0;
        }
        
        .loading-spinner {
            border: 4px solid #333;
            border-top: 4px solid #ffd700;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 0 auto;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .admin-toggle-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, #ff4444 0%, #cc0000 100%);
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            z-index: 100;
        }
        
        .message-box {
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
            display: none;
        }
        
        .message-success {
            background: rgba(76, 175, 80, 0.2);
            border: 1px solid #4CAF50;
            color: #4CAF50;
        }
        
        .message-error {
            background: rgba(244, 67, 54, 0.2);
            border: 1px solid #f44336;
            color: #f44336;
        }
        
        .admin-info {
            background: rgba(40, 40, 50, 0.7);
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
            font-size: 0.9rem;
        }
        
        .verification-status {
            display: none;
            text-align: center;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            background: rgba(40, 40, 50, 0.7);
        }
        
        .sheet-status {
            background: rgba(40, 40, 50, 0.7);
            border-radius: 8px;
            padding: 12px;
            margin: 15px 0;
            text-align: center;
            font-size: 0.85rem;
            border: 1px solid #444;
            display: none;
        }
        
        .sheet-connected {
            border-color: #4CAF50;
            color: #4CAF50;
        }
        
        .sheet-disconnected {
            border-color: #ff4444;
            color: #ff4444;
        }
        
        @media (max-width: 480px) {
            .login-card {
                padding: 20px;
            }
            
            .logo h1 {
                font-size: 2rem;
            }
            
            .admin-tabs {
                flex-direction: column;
            }
            
            .generating-content {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <button class="admin-toggle-btn" onclick="showAdminPanel()">
        <i class="fas fa-tools"></i> ADMIN
    </button>
    
    <div class="container">
        <div class="logo">
            <h1>THE BIG BULL</h1>
            <p>Premium Cheats & Tools</p>
        </div>
        
        <div class="sheet-status" id="sheetStatus">
            <i class="fas fa-spinner fa-spin"></i> Connecting to database...
        </div>
        
        <div class="password-info" id="keySection">
            <h3><i class="fas fa-key"></i> GET YOUR KEY</h3>
            <button class="get-password-btn" onclick="startPasswordProcess()">
                <i class="fas fa-key"></i> Click here to get your key
            </button>
            <div class="password-timer">
                <i class="fas fa-clock"></i> 
                Key changes in: <span id="passwordTimer">24:00:00</span>
            </div>
        </div>
        
        <div class="login-card">
            <div class="login-header">
                <h2>Access Premium Cheats</h2>
                <p>Enter your key to generate BBC credentials</p>
            </div>
            
            <div id="keyEntrySection">
                <div class="input-group">
                    <label for="enterKey">ENTER YOUR KEY</label>
                    <i class="fas fa-lock input-icon"></i>
                    <input type="text" id="enterKey" placeholder="Enter key in format: BBC XXX XXX" required>
                </div>
                
                <button class="generate-btn" onclick="verifyAndGenerate()">
                    <i class="fas fa-magic"></i> VERIFY KEY & GENERATE
                </button>
                
                <div id="message" class="message-box"></div>
                
                <div class="verification-status" id="verificationStatus">
                    <i class="fas fa-spinner fa-spin"></i> <span id="statusText">Checking key in database...</span>
                </div>
            </div>
            
            <div class="account-created-section" id="accountCreatedSection">
                <h3><i class="fas fa-check-circle"></i> ACCOUNT CREATED</h3>
                
                <div class="credentials-box">
                    <div class="credential-item">
                        <span class="cred-label">Username:</span>
                        <span class="cred-value" id="generatedUsername">Anant</span>
                        <button class="copy-btn" onclick="copyText('generatedUsername')">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                    <div class="credential-item">
                        <span class="cred-label">Password:</span>
                        <span class="cred-value" id="generatedPassword">Anant</span>
                        <button class="copy-btn" onclick="copyText('generatedPassword')">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
                
                <p style="color: #aaa; margin: 15px 0; font-size: 0.9rem;">
                    <i class="fas fa-info-circle"></i> Save these credentials for future login
                </p>
                
                <button class="btn-login" onclick="redirectToLoginPage()">
                    <i class="fas fa-sign-in-alt"></i> GO TO LOGIN PAGE
                </button>
            </div>
            
            <div class="user-stats">
                <div class="stat">
                    <div class="stat-number" id="totalUsers">4.0K</div>
                    <div class="stat-label">Total Users</div>
                </div>
                <div class="stat">
                    <div class="stat-number" id="activeToday">600</div>
                    <div class="stat-label">Active Today</div>
                </div>
                <div class="stat">
                    <div class="stat-number" id="onlineNow">250</div>
                    <div class="stat-label">Online Now</div>
                </div>
            </div>
            
            <div class="admin-section" id="adminPanel">
                <h3><i class="fas fa-tools"></i> ADMIN PANEL</h3>
                
                <div class="admin-tabs">
                    <button class="tab-btn active" onclick="switchTab('accounts-tab')">👥 UPLOAD ACCOUNTS</button>
                    <button class="tab-btn" onclick="switchTab('stats-tab')">📊 STATS</button>
                </div>
                
                <div class="tab-content active" id="accounts-tab">
                    <div class="admin-input">
                        <label>Paste Username:Password (one per line):</label>
                        <textarea id="bulkAccountsInput" placeholder="user1:pass123&#10;user2:pass456&#10;user3:pass789&#10;..."></textarea>
                    </div>
                    
                    <div class="admin-info">
                        <i class="fas fa-info-circle"></i> 
                        Format: username:password<br>
                        Example: BBC_USER1:PASS123<br>
                        <strong>If no accounts uploaded, default will be:</strong><br>
                        Username: <strong>Anant</strong><br>
                        Password: <strong>Anant</strong>
                    </div>
                    
                    <button class="btn-admin-green" onclick="uploadAccounts()">
                        <i class="fas fa-user-plus"></i> UPLOAD ACCOUNTS
                    </button>
                    
                    <div class="admin-info" style="margin-top: 15px;">
                        <i class="fas fa-database"></i> 
                        Uploaded Accounts: <span id="preloadedCount">0</span><br>
                        <strong>Default: Anant / Anant</strong>
                    </div>
                </div>
                
                <div class="tab-content" id="stats-tab">
                    <div class="admin-info">
                        <div style="display: flex; justify-content: space-between;">
                            <div>
                                <i class="fas fa-key"></i> Keys in Sheet: <span id="sheetKeysCount">0</span>
                            </div>
                            <div>
                                <i class="fas fa-users"></i> Used Keys: <span id="usedKeysCount">0</span>
                            </div>
                        </div>
                        <div style="margin-top: 10px;">
                            <i class="fas fa-user-check"></i> Available Accounts: <span id="availableAccountsCount">0</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="security-notice">
                <i class="fas fa-shield-alt"></i>
                BBC Keys System • Google Sheets Verification • Secure Credentials Generation
            </div>
        </div>
    </div>

    <div class="generating-modal" id="generatingModal">
        <div class="generating-content">
            <h3><i class="fas fa-cog"></i> GETTING KEY</h3>
            
            <div class="loading-spinner"></div>
            
            <div class="generating-text">
                Redirecting to get your key...
            </div>
            
            <div class="countdown" id="countdown">
                3
            </div>
        </div>
    </div>

    <script>
        const GOOGLE_SHEET_ID = "12wEvIdAK-PmzZLHx21LUTU2Nu9SUFiOSXy4FBElRqIo";
        const GOOGLE_API_KEY = "AIzaSyBgumBHaWS04TNGS7STW71MFeSLggpj7S0";
        const SHEET_NAME = "keys";
        
        let preloadedAccounts = [];
        let shortlinkUrl = "https://bbckeygen.onrender.com/";
        let loginPageUrl = "https://anantemoteweb.lovable.app/";
        
        // Time-based stats variables
        let baseTotalUsers = 4000; // 4K
        let lastUpdateTime = new Date();
        
        async function init() {
            const savedAccounts = localStorage.getItem('bbc_preloaded_accounts');
            const savedShortlink = localStorage.getItem('bbc_shortlink_url');
            const savedLoginUrl = localStorage.getItem('bbc_login_url');
            
            if (savedAccounts) preloadedAccounts = JSON.parse(savedAccounts);
            if (savedShortlink) shortlinkUrl = savedShortlink;
            if (savedLoginUrl) loginPageUrl = savedLoginUrl;
            
            updateTimer();
            setInterval(updateTimer, 1000);
            
            await checkSheetConnection();
            await loadUserStats();
            updateAdminDisplay();
            
            // Start live stats update
            startLiveStats();
        }
        
        function updateTimer() {
            const now = Date.now();
            const tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate() + 1);
            tomorrow.setHours(0, 0, 0, 0);
            
            const timeLeft = tomorrow - now;
            const hours = Math.floor(timeLeft / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
            
            document.getElementById('passwordTimer').textContent = 
                `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        }
        
        async function checkSheetConnection() {
            const statusElement = document.getElementById('sheetStatus');
            
            statusElement.style.display = 'block';
            statusElement.className = 'sheet-status';
            statusElement.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Connecting to Google Sheets Database...';
            
            try {
                const url = `https://sheets.googleapis.com/v4/spreadsheets/${GOOGLE_SHEET_ID}?key=${GOOGLE_API_KEY}`;
                const response = await fetch(url);
                
                if (response.ok) {
                    statusElement.className = 'sheet-status sheet-connected';
                    statusElement.innerHTML = '<i class="fas fa-check-circle"></i> Connected to Google Sheets Database';
                    
                    setTimeout(() => {
                        statusElement.style.display = 'none';
                    }, 3000);
                    
                    return true;
                } else {
                    throw new Error('Failed to connect');
                }
            } catch (error) {
                statusElement.className = 'sheet-status sheet-disconnected';
                statusElement.innerHTML = '<i class="fas fa-exclamation-triangle"></i> Database Connection Error - Please try again later';
                
                setTimeout(() => {
                    statusElement.style.display = 'none';
                }, 5000);
                return false;
            }
        }
        
        async function loadUserStats() {
            try {
                const range = `${SHEET_NAME}!A:D`;
                const url = `https://sheets.googleapis.com/v4/spreadsheets/${GOOGLE_SHEET_ID}/values/${range}?key=${GOOGLE_API_KEY}`;
                
                const response = await fetch(url);
                const data = await response.json();
                
                if (data.values && data.values.length > 1) {
                    const totalKeys = data.values.length - 1;
                    
                    let usedCount = 0;
                    for (let i = 1; i < data.values.length; i++) {
                        const row = data.values[i];
                        if (row[1] && row[1].toLowerCase().trim() === 'used') {
                            usedCount++;
                        }
                    }
                    
                    document.getElementById('sheetKeysCount').textContent = totalKeys;
                    document.getElementById('usedKeysCount').textContent = usedCount;
                    document.getElementById('availableAccountsCount').textContent = preloadedAccounts.length;
                }
            } catch (error) {
                console.error('Error loading stats:', error);
            }
        }
        
        function startLiveStats() {
            // Update stats every 30 seconds
            setInterval(updateLiveStats, 30000);
            // Initial update
            updateLiveStats();
        }
        
        function updateLiveStats() {
            const now = new Date();
            const currentHour = now.getHours();
            
            // Total Users - Fixed at 4K
            document.getElementById('totalUsers').textContent = '4.0K';
            
            // Active Today - Time-based
            let activeToday = 600; // Morning base
            
            if (currentHour >= 6 && currentHour < 12) {
                // Morning (6 AM - 12 PM): 600-900
                activeToday = 600 + Math.floor(Math.random() * 300);
            } else if (currentHour >= 12 && currentHour < 18) {
                // Afternoon (12 PM - 6 PM): 900-1400
                activeToday = 900 + Math.floor(Math.random() * 500);
            } else if (currentHour >= 18 && currentHour < 22) {
                // Evening (6 PM - 10 PM): 1400-1900
                activeToday = 1400 + Math.floor(Math.random() * 500);
            } else {
                // Night (10 PM - 6 AM): 120-200
                activeToday = 120 + Math.floor(Math.random() * 80);
            }
            
            // Online Now - Time-based with fluctuations
            let onlineNow = 250; // Base
            
            if (currentHour >= 6 && currentHour < 12) {
                // Morning: 400-600
                onlineNow = 400 + Math.floor(Math.random() * 200);
            } else if (currentHour >= 12 && currentHour < 18) {
                // Afternoon: 500-700
                onlineNow = 500 + Math.floor(Math.random() * 200);
            } else if (currentHour >= 18 && currentHour < 22) {
                // Evening: 600-700
                onlineNow = 600 + Math.floor(Math.random() * 100);
            } else {
                // Night: 120-200
                onlineNow = 120 + Math.floor(Math.random() * 80);
            }
            
            // Add small random variation
            activeToday += Math.floor(Math.random() * 20) - 10;
            onlineNow += Math.floor(Math.random() * 15) - 7;
            
            // Ensure minimum values
            activeToday = Math.max(120, activeToday);
            onlineNow = Math.max(100, onlineNow);
            
            // Format numbers
            const formatNumber = (num) => {
                if (num >= 1000) {
                    return (num / 1000).toFixed(1) + 'K';
                }
                return num.toString();
            };
            
            // Animate the update
            animateCounter('activeToday', formatNumber(activeToday));
            animateCounter('onlineNow', formatNumber(onlineNow));
        }
        
        function animateCounter(elementId, newValue) {
            const element = document.getElementById(elementId);
            if (element.textContent !== newValue) {
                element.style.color = '#ff8c00';
                setTimeout(() => {
                    element.textContent = newValue;
                    element.style.color = '#ffd700';
                }, 300);
            }
        }
        
        function showMessage(text, type) {
            const msg = document.getElementById('message');
            msg.textContent = text;
            msg.className = `message-box message-${type}`;
            msg.style.display = 'block';
            
            setTimeout(() => {
                msg.style.display = 'none';
            }, 3000);
        }
        
        function startPasswordProcess() {
            const modal = document.getElementById('generatingModal');
            const countdown = document.getElementById('countdown');
            
            modal.style.display = 'flex';
            let seconds = 3;
            
            const interval = setInterval(() => {
                seconds--;
                countdown.textContent = seconds;
                
                if (seconds <= 0) {
                    clearInterval(interval);
                    window.open(shortlinkUrl, '_blank');
                    modal.style.display = 'none';
                }
            }, 1000);
        }
        
        async function verifyAndGenerate() {
            const enteredKey = document.getElementById('enterKey').value.trim().toUpperCase();
            
            if (!enteredKey) {
                showMessage('Please enter a key!', 'error');
                return;
            }
            
            if (!/^BBC\s+[A-Z]{3}\s+[0-9]{3}$/.test(enteredKey)) {
                showMessage('Invalid format! Use: BBC XXX XXX', 'error');
                return;
            }
            
            const statusDiv = document.getElementById('verificationStatus');
            const statusText = document.getElementById('statusText');
            statusDiv.style.display = 'block';
            statusText.textContent = 'Checking key in database...';
            statusText.style.color = '#ffd700';
            
            try {
                const range = `${SHEET_NAME}!A:Z`;
                const url = `https://sheets.googleapis.com/v4/spreadsheets/${GOOGLE_SHEET_ID}/values/${range}?key=${GOOGLE_API_KEY}`;
                
                const response = await fetch(url);
                const data = await response.json();
                
                if (!data.values) {
                    throw new Error('No data found in sheet');
                }
                
                let keyFound = false;
                let keyRow = -1;
                let keyStatus = '';
                
                for (let i = 0; i < data.values.length; i++) {
                    const row = data.values[i];
                    if (row[0] && row[0].trim().toUpperCase() === enteredKey) {
                        keyFound = true;
                        keyRow = i;
                        keyStatus = row[1] ? row[1].trim() : '';
                        break;
                    }
                }
                
                if (!keyFound) {
                    statusText.textContent = '✗ Key not found in database';
                    statusText.style.color = '#ff4444';
                    
                    setTimeout(() => {
                        statusDiv.style.display = 'none';
                        showMessage('Invalid key! Not found in database.', 'error');
                    }, 2000);
                    return;
                }
                
                if (keyStatus && keyStatus.toLowerCase() === 'used') {
                    statusText.textContent = '✗ Key has already been used';
                    statusText.style.color = '#ff4444';
                    
                    setTimeout(() => {
                        statusDiv.style.display = 'none';
                        showMessage('This key has already been used!', 'error');
                    }, 2000);
                    return;
                }
                
                statusText.textContent = '✓ Key verified! Getting account...';
                statusText.style.color = '#4CAF50';
                
                let username = "Anant";
                let password = "Anant";
                
                if (preloadedAccounts.length > 0) {
                    const account = preloadedAccounts.shift();
                    username = account.username;
                    password = account.password;
                    
                    localStorage.setItem('bbc_preloaded_accounts', JSON.stringify(preloadedAccounts));
                }
                
                sessionStorage.setItem('bbc_username', username);
                sessionStorage.setItem('bbc_password', password);
                
                setTimeout(() => {
                    showAccountCreated(username, password);
                    statusDiv.style.display = 'none';
                    showMessage('✅ Account created successfully!', 'success');
                    updateAdminDisplay();
                    
                    // Update stats slightly
                    updateLiveStats();
                }, 1500);
                
            } catch (error) {
                console.error('Verification error:', error);
                statusText.textContent = '✗ Database connection error';
                statusText.style.color = '#ff4444';
                
                setTimeout(() => {
                    statusDiv.style.display = 'none';
                    showMessage('Database error. Please try again.', 'error');
                }, 2000);
            }
        }
        
        function showAccountCreated(username, password) {
            document.getElementById('generatedUsername').textContent = username;
            document.getElementById('generatedPassword').textContent = password;
            
            document.getElementById('keySection').style.display = 'none';
            document.getElementById('keyEntrySection').style.display = 'none';
            document.getElementById('accountCreatedSection').style.display = 'block';
            
            document.getElementById('enterKey').value = '';
        }
        
        function copyText(elementId) {
            const text = document.getElementById(elementId).textContent;
            navigator.clipboard.writeText(text)
                .then(() => {
                    const btn = event.target.closest('button');
                    btn.innerHTML = '<i class="fas fa-check"></i>';
                    btn.style.background = '#4CAF50';
                    
                    setTimeout(() => {
                        btn.innerHTML = '<i class="fas fa-copy"></i>';
                        btn.style.background = '';
                    }, 2000);
                });
        }
        
        function redirectToLoginPage() {
            window.location.href = loginPageUrl;
        }
        
        function showAdminPanel() {
            const password = prompt('Enter admin password:');
            if (password === 'admin123') {
                const adminSection = document.getElementById('adminPanel');
                adminSection.style.display = 'block';
                updateAdminDisplay();
                
                adminSection.scrollIntoView({ behavior: 'smooth' });
            } else {
                alert('Wrong password!');
            }
        }
        
        function switchTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            
            document.getElementById(tabId).classList.add('active');
            event.target.classList.add('active');
        }
        
        function updateAdminDisplay() {
            document.getElementById('preloadedCount').textContent = preloadedAccounts.length;
            document.getElementById('availableAccountsCount').textContent = preloadedAccounts.length;
        }
        
        function uploadAccounts() {
            const accountsText = document.getElementById('bulkAccountsInput').value.trim();
            
            if (!accountsText) {
                alert('Please paste accounts!');
                return;
            }
            
            const lines = accountsText.split('\n')
                .map(line => line.trim())
                .filter(line => line.length > 0);
            
            if (lines.length === 0) {
                alert('No accounts found!');
                return;
            }
            
            let addedCount = 0;
            let errorCount = 0;
            
            lines.forEach(line => {
                const parts = line.split(':');
                if (parts.length === 2) {
                    const username = parts[0].trim();
                    const password = parts[1].trim();
                    
                    if (username && password) {
                        const exists = preloadedAccounts.some(acc => acc.username === username);
                        if (!exists) {
                            preloadedAccounts.push({ username, password });
                            addedCount++;
                        }
                    } else {
                        errorCount++;
                    }
                } else {
                    errorCount++;
                }
            });
            
            localStorage.setItem('bbc_preloaded_accounts', JSON.stringify(preloadedAccounts));
            
            document.getElementById('bulkAccountsInput').value = '';
            
            updateAdminDisplay();
            
            if (errorCount > 0) {
                alert(`✅ ${addedCount} accounts uploaded!\n${errorCount} lines had errors.\nTotal available: ${preloadedAccounts.length}`);
            } else {
                alert(`✅ ${addedCount} accounts uploaded!\nTotal available: ${preloadedAccounts.length}`);
            }
        }
        
        window.onload = init;
    </script>
</body>
</html>