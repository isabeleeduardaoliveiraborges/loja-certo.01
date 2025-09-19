<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema CRUD - Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-dark: #2c3e50;
            --primary: #34495e;
            --primary-light: #4a6572;
            --accent: #e74c3c;
            --accent-light: #ff7f6e;
            --text-light: #ecf0f1;
            --text-dark: #2c3e50;
            --background: #1a1f2e;
            --card-bg: #2a3142;
            --card-hover: #343d54;
        }
        
        body {
            background: linear-gradient(135deg, var(--background) 0%, #16202d 100%);
            color: var(--text-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            background-attachment: fixed;
            padding: 20px;
        }
        
        .container {
            background: rgba(42, 49, 66, 0.9);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            margin-top: 30px;
            margin-bottom: 30px;
            border: 1px solid var(--primary-light);
        }
        
        .titulo-espaco {
            color: var(--accent-light);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            border-bottom: 2px solid var(--accent);
            padding-bottom: 15px;
            margin-bottom: 30px;
            text-align: center;
        }
        
        h1, h2 {
            color: var(--accent-light);
            font-weight: 700;
        }
        
        .btn-primary {
            background: linear-gradient(to right, var(--accent) 0%, var(--accent-light) 100%);
            border: none;
            border-radius: 30px;
            font-weight: 600;
            padding: 10px 20px;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            background: linear-gradient(to right, var(--accent-light) 0%, #ff9d8a 100%);
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(231, 76, 60, 0.4);
        }
        
        .btn-danger {
            background: linear-gradient(to right, #c0392b 0%, var(--accent) 100%);
            border: none;
            border-radius: 30px;
        }
        
        .btn-warning {
            background: linear-gradient(to right, #d35400 0%, #e67e22 100%);
            border: none;
            border-radius: 30px;
            color: white;
        }
        
        .btn-success {
            background: linear-gradient(to right, #27ae60 0%, #2ecc71 100%);
            border: none;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 600;
        }
        
        .btn-secondary {
            background: linear-gradient(to right, var(--primary-dark) 0%, var(--primary) 100%);
            border: none;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 600;
        }
        
        .btn-group .btn {
            margin-right: 10px;
            padding: 12px 25px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-group .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .form-control {
            background-color: var(--primary);
            border: 1px solid var(--primary-light);
            color: var(--text-light);
            border-radius: 8px;
            padding: 12px 15px;
        }
        
        .form-control:focus {
            background-color: var(--primary-light);
            border-color: var(--accent);
            color: var(--text-light);
            box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.25);
        }
        
        .form-control::placeholder {
            color: #bdc3c7;
        }
        
        .form-label {
            color: var(--accent-light);
            font-weight: 600;
            margin-bottom: 8px;
        }
        
        .card {
            background-color: var(--card-bg);
            border: 1px solid var(--primary-light);
            border-radius: 12px;
            transition: transform 0.3s, background-color 0.3s;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-10px);
            background-color: var(--card-hover);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.3);
        }
        
        .card-title {
            color: var(--accent-light);
            font-weight: 600;
        }
        
        .table {
            background-color: var(--card-bg);
            color: var(--text-light);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .table th {
            background-color: var(--primary);
            color: var(--accent-light);
            border-color: var(--primary-light);
        }
        
        .table td {
            border-color: var(--primary-light);
            vertical-align: middle;
        }
        
        .table-hover tbody tr:hover {
            background-color: var(--card-hover);
        }
        
        /* Efeito de partículas no fundo */
        .background-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            background: rgba(231, 76, 60, 0.2);
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="background-wrapper" id="particles"></div>
    
    <div class="container">
        <h1 class="titulo-espaco">Sistema CRUD de Produtos</h1>
        <div class="btn-group mb-4" role="group" aria-label="Navegação principal">
            <a href="index.php" class="btn btn-secondary"><i class="fas fa-home me-2"></i>Início</a>
            <a href="form_cadastrar.php" class="btn btn-danger"><i class="fas fa-plus me-2"></i>Cadastrar</a>
            <a href="listar.php" class="btn btn-warning"><i class="fas fa-list me-2"></i>Listar</a>
        </div>