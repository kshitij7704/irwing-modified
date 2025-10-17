<footer class="footer government-footer">
    <style>
        /* Government Footer Styles - Matching Reference Design */
        .government-footer {
            background: #2c3e50;
            color: #ecf0f1;
            font-family: 'Arial', 'Helvetica', sans-serif;
            margin-top: 0;
        }
        
        /* Top Footer Links Bar */
        .footer-links-bar {
            background: #34495e;
            padding: 12px 0;
            border-bottom: 1px solid #4a5f7a;
        }
        
        .footer-links-bar .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 25px;
        }
        
        .footer-links-bar a {
            color: #bdc3c7;
            text-decoration: none;
            font-size: 12px;
            font-weight: 500;
            padding: 4px 8px;
            border-radius: 3px;
            transition: all 0.3s ease;
            white-space: nowrap;
        }
        
        .footer-links-bar a:hover {
            color: #3498db;
            background: rgba(52, 152, 219, 0.1);
        }
        
        /* Main Footer Content */
        .footer-main {
            padding: 20px 0;
            background: #2c3e50;
        }
        
        .footer-main .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .footer-left {
            display: flex;
            align-items: center;
            gap: 15px;
            flex: 1;
        }
        
        .footer-logo {
            height: 40px;
            width: auto;
        }
        
        .footer-content {
            flex: 1;
        }
        
        .footer-content h6 {
            color: #ecf0f1;
            font-size: 11px;
            font-weight: bold;
            margin: 0 0 2px 0;
            line-height: 1.2;
        }
        
        .footer-content p {
            color: #bdc3c7;
            font-size: 10px;
            margin: 0;
            line-height: 1.3;
        }
        
        .footer-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .compliance-badges {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .compliance-badges img {
            height: 35px;
            width: auto;
            border-radius: 3px;
        }
        
        .quality-badges {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .quality-badges img {
            height: 40px;
            width: auto;
        }
        
        /* Responsive Design */
        @media (max-width: 991px) {
            .footer-links-bar .container {
                gap: 15px;
            }
            
            .footer-links-bar a {
                font-size: 11px;
                padding: 3px 6px;
            }
            
            .footer-main .container {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }
            
            .footer-left {
                justify-content: center;
            }
            
            .compliance-badges,
            .quality-badges {
                justify-content: center;
            }
        }
        
        @media (max-width: 576px) {
            .footer-links-bar .container {
                gap: 10px;
            }
            
            .footer-links-bar a {
                font-size: 10px;
                padding: 2px 4px;
            }
            
            .footer-logo {
                height: 30px;
            }
            
            .footer-content h6 {
                font-size: 10px;
            }
            
            .footer-content p {
                font-size: 9px;
            }
            
            .compliance-badges img {
                height: 28px;
            }
            
            .quality-badges img {
                height: 32px;
            }
            
            .footer-left {
                gap: 10px;
            }
            
            .footer-right {
                gap: 10px;
            }
            
            .compliance-badges,
            .quality-badges {
                gap: 6px;
            }
        }
    </style>

    <!-- Footer Links Bar -->
    <div class="footer-links-bar">
        <div class="container">
            <a href="#">Accessibility Help</a>
            <a href="#">Right to Information</a>
            <a href="#">Website Policies</a>
            <a href="#">Contact Us</a>
            <a href="#">Download Forms</a>
            <a href="#">IPR</a>
            <a href="#">Web Information Manager</a>
            <a href="#">Feedback</a>
            <a href="#">Terms of Use</a>
        </div>
    </div>

    <!-- Main Footer Content -->
    <div class="footer-main">
        <div class="container">
            <div class="footer-left">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Emblem_of_India.svg" 
                     alt="Government of India" class="footer-logo">
                <div class="footer-content">
                    <h6>Website Content Managed by Department of Telecommunications, Ministry of Communication, GoI</h6>
                    <p>Designed, Developed and Hosted by National Informatics Centre NIC |</p>
                    <p>Last Updated: {{ date('d M Y') }}</p>
                </div>
            </div>
            
            <div class="footer-right">
                <div class="compliance-badges">
                    <img src="{{asset('images/c.png')}}" 
                         alt="Valid CSS" title="Valid CSS">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/W3C_HTML5_certified.png/1200px-W3C_HTML5_certified.png" 
                         alt="Valid HTML" title="Valid HTML">
                </div>
                
                <div class="quality-badges">
                    <img src="{{asset('images/s.png')}}" 
                         alt="STQC Certified" title="STQC Certified">
                    <img src="{{asset('images/a.png')}}" 
                         alt="Accessibility Compliant" title="Accessibility Compliant">
                </div>
            </div>
        </div>
    </div>
</footer>
