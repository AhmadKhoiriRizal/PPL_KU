<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizational Structure</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .org-container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        .org-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .org-header h2 {
            color: #2c3e50;
            font-weight: 700;
        }

        .org-header p {
            color: #7f8c8d;
        }

        .org-level {
            margin: 20px 0;
        }

        .org-level-title {
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 600;
        }

        .org-item {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            border: 1px solid #e0e0e0;
        }

        .org-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-color: #3498db;
        }

        .org-item-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .org-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .org-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .org-info h5 {
            margin: 0;
            color: #2c3e50;
            font-weight: 600;
        }

        .org-info p {
            margin: 5px 0 0;
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        .org-details {
            margin-top: 10px;
        }

        .org-details p {
            margin: 5px 0;
            font-size: 0.9rem;
        }

        .org-details i {
            color: #3498db;
            margin-right: 5px;
            width: 20px;
            text-align: center;
        }

        .connecting-line {
            position: absolute;
            width: 2px;
            background-color: #3498db;
            left: 50%;
            top: 0;
            bottom: 0;
            transform: translateX(-50%);
            z-index: 0;
        }

        .level-connector {
            position: relative;
        }

        @media (max-width: 768px) {
            .org-grid {
                grid-template-columns: 1fr !important;
            }

            .connecting-line {
                display: none;
            }

            .org-item {
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container org-container">
        <div class="org-header">
            <h2>Our Organization Structure</h2>
            <p>Meet the team that makes everything possible</p>
        </div>

        <!-- Level 1: CEO -->
        <div class="org-level">
            <div class="org-level-title">
                Board of Directors
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="org-item text-center">
                        <div class="org-item-header justify-content-center">
                            <div class="org-avatar">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/905c046a-f0cf-4c21-9fe7-c265f60708a1.png" alt="Portrait of a senior executive in formal attire with gray hair, standing confidently with arms crossed in a modern office setting" />
                            </div>
                            <div class="org-info">
                                <h5>Johnathan Smith</h5>
                                <p>Chief Executive Officer</p>
                            </div>
                        </div>
                        <div class="org-details">
                            <p><i class="bi bi-envelope"></i> j.smith@company.com</p>
                            <p><i class="bi bi-telephone"></i> +1 (555) 123-4567</p>
                            <p><i class="bi bi-building"></i> Corporate Headquarters</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Level 2: Executives -->
        <div class="org-level level-connector">
            <div class="connecting-line"></div>
            <div class="org-level-title">
                Executive Leadership
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="org-item">
                        <div class="org-item-header">
                            <div class="org-avatar">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7bc2f479-730e-4e03-bb67-813501b2e17e.png" alt="Portrait of a professional woman in business attire with dark hair and glasses, working on a laptop in a modern office" />
                            </div>
                            <div class="org-info">
                                <h5>Sarah Johnson</h5>
                                <p>Chief Financial Officer</p>
                            </div>
                        </div>
                        <div class="org-details">
                            <p><i class="bi bi-envelope"></i> s.johnson@company.com</p>
                            <p><i class="bi bi-telephone"></i> +1 (555) 123-4568</p>
                            <p><i class="bi bi-people"></i> Finance Department</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="org-item">
                        <div class="org-item-header">
                            <div class="org-avatar">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/bdfbcd02-341c-4b72-8dc9-bb4922c6140c.png" alt="Portrait of a confident male executive with short hair and a gray suit, presenting to a boardroom" />
                            </div>
                            <div class="org-info">
                                <h5>Michael Chen</h5>
                                <p>Chief Technology Officer</p>
                            </div>
                        </div>
                        <div class="org-details">
                            <p><i class="bi bi-envelope"></i> m.chen@company.com</p>
                            <p><i class="bi bi-telephone"></i> +1 (555) 123-4569</p>
                            <p><i class="bi bi-code-square"></i> Technology Division</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="org-item">
                        <div class="org-item-header">
                            <div class="org-avatar">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/8ffaa166-8224-474a-8c72-7b7549a73b2b.png" alt="Portrait of a smiling female executive with curly brown hair, standing in front of a glass-walled office" />
                            </div>
                            <div class="org-info">
                                <h5>Lisa Rodriguez</h5>
                                <p>Chief Marketing Officer</p>
                            </div>
                        </div>
                        <div class="org-details">
                            <p><i class="bi bi-envelope"></i> l.rodriguez@company.com</p>
                            <p><i class="bi bi-telephone"></i> +1 (555) 123-4570</p>
                            <p><i class="bi bi-megaphone"></i> Marketing Team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Level 3: Department Heads -->
        <div class="org-level level-connector">
            <div class="connecting-line"></div>
            <div class="org-level-title">
                Department Heads
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="org-item">
                        <div class="org-item-header">
                            <div class="org-avatar">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/3eaed5e4-4e12-4a5d-a8ec-414da80279d0.png" alt="Portrait of a serious-looking middle-aged man with a beard, wearing a business casual shirt" />
                            </div>
                            <div class="org-info">
                                <h5>David Wilson</h5>
                                <p>Finance Director</p>
                            </div>
                        </div>
                        <div class="org-details">
                            <p><i class="bi bi-envelope"></i> d.wilson@company.com</p>
                            <p><i class="bi bi-telephone"></i> +1 (555) 123-4571</p>
                            <p><i class="bi bi-cash-stack"></i> Accounting, Tax</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="org-item">
                        <div class="org-item-header">
                            <div class="org-avatar">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0513c52e-51bf-4e84-b212-9cdb55ed278d.png" alt="Portrait of a young female tech professional with short black hair, wearing smart casual attire in a tech lab" />
                            </div>
                            <div class="org-info">
                                <h5>Emma Davis</h5>
                                <p>Engineering Manager</p>
                            </div>
                        </div>
                        <div class="org-details">
                            <p><i class="bi bi-envelope"></i> e.davis@company.com</p>
                            <p><i class="bi bi-telephone"></i> +1 (555) 123-4572</p>
                            <p><i class="bi bi-terminal"></i> Software Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="org-item">
                        <div class="org-item-header">
                            <div class="org-avatar">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ddd2b767-2b62-4821-bc4b-70b5ee72f97c.png" alt="Portrait of an enthusiastic young professional with a laptop, sitting at a colorful workspace" />
                            </div>
                            <div class="org-info">
                                <h5>Robert Brown</h5>
                                <p>Product Manager</p>
                            </div>
                        </div>
                        <div class="org-details">
                            <p><i class="bi bi-envelope"></i> r.brown@company.com</p>
                            <p><i class="bi bi-telephone"></i> +1 (555) 123-4573</p>
                            <p><i class="bi bi-kanban"></i> Product Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="org-item">
                        <div class="org-item-header">
                            <div class="org-avatar">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/bbe1c23e-1bf8-4ccd-882d-e183c58244eb.png" alt="Portrait of a stylish woman with red hair and a bright smile, holding a tablet in a marketing office" />
                            </div>
                            <div class="org-info">
                                <h5>Olivia Martin</h5>
                                <p>Digital Marketing Manager</p>
                            </div>
                        </div>
                        <div class="org-details">
                            <p><i class="bi bi-envelope"></i> o.martin@company.com</p>
                            <p><i class="bi bi-telephone"></i> +1 (555) 123-4574</p>
                            <p><i class="bi bi-globe"></i> Digital Marketing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Level 4: Teams -->
        <div class="org-level level-connector">
            <div class="connecting-line"></div>
            <div class="org-level-title">
                Team Leads
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="org-item">
                        <div class="org-item-header">
                            <div class="org-avatar">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9e31815c-c87e-4536-b7dd-eaafab600f60.png" alt="Portrait of a technical lead demonstrating software to colleagues in a meeting room" />
                            </div>
                            <div class="org-info">
                                <h5>Thomas Lee</h5>
                                <p>Frontend Team Lead</p>
                            </div>
                        </div>
                        <div class="org-details">
                            <p><i class="bi bi-envelope"></i> t.lee@company.com</p>
                            <p><i class="bi bi-telephone"></i> +1 (555) 123-4575</p>
                            <p><i class="bi bi-laptop"></i> 8 Team Members</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="org-item">
                        <div class="org-item-header">
                            <div class="org-avatar">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b7f115b5-fd4b-43c2-8a53-a3a1b5e4f8e5.png" alt="Portrait of a services engineer in a casual hoodie, working on a server rack" />
                            </div>
                            <div class="org-info">
                                <h5>Jennifer Park</h5>
                                <p>Backend Team Lead</p>
                            </div>
                        </div>
                        <div class="org-details">
                            <p><i class="bi bi-envelope"></i> j.park@company.com</p>
                            <p><i class="bi bi-telephone"></i> +1 (555) 123-4576</p>
                            <p><i class="bi bi-server"></i> 10 Team Members</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="org-item">
                        <div class="org-item-header">
                            <div class="org-avatar">
                                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/4cab7571-fe52-44fa-99f1-7071bf1889a6.png" alt="Portrait of a creative director with colorful hair in an artsy studio environment" />
                            </div>
                            <div class="org-info">
                                <h5>Mark Taylor</h5>
                                <p>Design Team Lead</p>
                            </div>
                        </div>
                        <div class="org-details">
                            <p><i class="bi bi-envelope"></i> m.taylor@company.com</p>
                            <p><i class="bi bi-telephone"></i> +1 (555) 123-4577</p>
                            <p><i class="bi bi-palette"></i> 5 Team Members</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add animation when elements come into view
        document.addEventListener('DOMContentLoaded', function() {
            const orgItems = document.querySelectorAll('.org-item');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });

            orgItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = 'all 0.5s ease';
                observer.observe(item);
            });

            // Add hover effect to connecting lines
            const connectingLines = document.querySelectorAll('.connecting-line');
            connectingLines.forEach(line => {
                line.addEventListener('mouseover', () => {
                    line.style.width = '4px';
                });
                line.addEventListener('mouseout', () => {
                    line.style.width = '2px';
                });
            });
        });
    </script>
</body>
</html>

