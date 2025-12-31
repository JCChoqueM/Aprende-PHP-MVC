<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprende PHP con Ejercicios - Luis José Sánchez</title>
    <style>
        /* ========================================
           ESTILOS GLOBALES Y VARIABLES CSS
           ======================================== */

        /* Reset de estilos por defecto del navegador */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* Incluye padding y border en el tamaño */
        }

        /* Variables CSS: Colores y temas
           Facilitan cambios de color globales */
        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --secondary: #06b6d4;
            --success: #10b981;
            --warning: #f59e0b;
            --error: #ef4444;
            --bg-main: #0f172a;
            --bg-secondary: #1e293b;
            --bg-card: #334155;
            --text-primary: #f1f5f9;
            --text-secondary: #cbd5e1;
            --border: #475569;
            --code-bg: #1e293b;
        }

        /* Estilos del body: fondo, fuente y altura mínima */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--bg-main) 0%, #1e293b 100%);
            /* Gradiente de fondo */
            color: var(--text-primary);
            /* Texto claro */
            min-height: 100vh;
            /* Ocupar al menos todo el viewport */
            line-height: 1.6;
            /* Espaciado de líneas para legibilidad */
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background: var(--bg-secondary);
            border-bottom: 3px solid var(--primary);
            padding: 20px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            margin-bottom: 30px;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        h1 {
            color: var(--primary);
            font-size: 2rem;
            margin-bottom: 5px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            animation: slideInDown 0.6s ease-out;
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .subtitle {
            color: var(--text-secondary);
            font-size: 0.95rem;
        }

        .toggle-menu-btn {
            display: none;
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(79, 70, 229, 0.3);
        }

        .toggle-menu-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.5);
        }

        .toggle-menu-btn:active {
            transform: translateY(0);
        }

        .main-grid {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 25px;
            margin-bottom: 30px;
            position: relative;
            align-items: start;
        }

        .sidebar {
            background: var(--bg-secondary);
            border-radius: 12px;
            padding: 20px;
            height: fit-content;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            position: sticky;
            top: 20px;
            max-height: calc(100vh - 40px);
            overflow-y: auto;
            transition: all 0.3s ease;
            min-width: 320px;
        }

        .sidebar.collapsed {
            min-width: 50px;
            padding: 20px 10px;
        }

        .sidebar.collapsed .sidebar-header h3,
        .sidebar.collapsed .chapter-accordion {
            display: none;
        }

        .sidebar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--border);
            flex-direction: column;
            gap: 10px;
        }

        .sidebar.collapsed .sidebar-header {
            border-bottom: none;
            margin-bottom: 10px;
        }

        .sidebar-header h3 {
            color: var(--secondary);
            font-size: 1.2rem;
            margin: 0;
            transition: all 0.3s ease;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .sidebar.collapsed .sidebar-header h3 {
            font-size: 0;
            width: 0;
            padding: 0;
        }

        .toggle-index-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 8px 10px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 6px rgba(79, 70, 229, 0.2);
        }

        .toggle-index-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
            box-shadow: 0 4px 10px rgba(79, 70, 229, 0.4);
        }

        .toggle-index-btn:active {
            transform: translateY(0);
            box-shadow: 0 2px 4px rgba(79, 70, 229, 0.2);
        }

        .toggle-index-icon {
            transition: transform 0.3s ease;
        }

        .sidebar.collapsed .toggle-index-icon {
            transform: rotate(180deg);
        }

        .close-sidebar-btn {
            display: none;
            background: var(--error);
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .close-sidebar-btn:hover {
            background: #dc2626;
        }

        @media (max-width: 968px) {
            .toggle-menu-btn {
                display: block;
            }

            .main-grid {
                grid-template-columns: 1fr;
            }

            .sidebar {
                position: fixed;
                left: -100%;
                top: 0;
                width: 320px;
                max-width: 85%;
                height: 100vh;
                max-height: 100vh;
                z-index: 1000;
                border-radius: 0;
                min-width: auto;
            }

            .sidebar.active {
                left: 0;
            }

            .sidebar.collapsed {
                min-width: auto;
            }

            .sidebar.collapsed .toggle-index-icon {
                transform: none;
            }

            .close-sidebar-btn {
                display: block;
            }

            .sidebar-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.7);
                z-index: 999;
            }

            .sidebar-overlay.active {
                display: block;
            }
        }

        .chapter-accordion {
            list-style: none;
        }

        .chapter-header {
            padding: 12px 15px;
            background: var(--bg-card);
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.2s ease, transform 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-left: 3px solid var(--primary);
            position: relative;
        }

        .chapter-header:hover {
            background: var(--primary);
            transform: translateX(5px);
        }

        .chapter-header.active {
            background: var(--primary);
            border-left-color: var(--success);
            box-shadow: 0 0 12px rgba(16, 185, 129, 0.3);
        }

        .chapter-header.active::before {
            content: '✓';
            position: absolute;
            left: 5px;
            color: var(--success);
            font-weight: bold;
            font-size: 1.1rem;
        }

        .chapter-icon {
            transition: transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .chapter-header.active .chapter-icon {
            transform: rotate(180deg);
        }

        .exercises-list {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            margin-bottom: 8px;
        }

        .exercises-list.open {
            max-height: 500px;
        }

        .exercise-item {
            padding: 10px 15px 10px 30px;
            background: var(--bg-main);
            margin: 6px 0;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            font-size: 0.9rem;
            border-left: 3px solid transparent;
            position: relative;
        }

        .exercise-item:hover {
            background: var(--bg-card);
            border-left-color: var(--secondary);
            transform: translateX(6px);
            box-shadow: 0 2px 8px rgba(6, 182, 212, 0.15);
        }

        .exercise-item.active {
            background: linear-gradient(135deg, var(--secondary) 0%, #0891b2 100%);
            color: white;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(6, 182, 212, 0.3);
            border-left-color: white;
        }

        .exercise-item.active::after {
            content: '→';
            position: absolute;
            right: 10px;
            animation: slideRight 0.4s ease-out;
        }

        @keyframes slideRight {
            from {
                opacity: 0;
                transform: translateX(-5px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .content-area {
            background: var(--bg-secondary);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(71, 85, 105, 0.3);
            animation: fadeInUp 0.6s ease-out 0.2s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .exercise-header {
            margin-bottom: 25px;
        }

        .exercise-title {
            color: var(--secondary);
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 1.5rem;
            }

            .exercise-title {
                font-size: 1.4rem;
            }

            .content-area {
                padding: 20px;
            }
        }

        .exercise-meta {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .badge {
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            display: inline-block;
        }

        .badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .badge-chapter {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
        }

        .badge-difficulty {
            background: linear-gradient(135deg, var(--warning) 0%, #d97706 100%);
            color: white;
        }

        .exercise-description {
            background: var(--bg-card);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            border-left: 4px solid var(--secondary);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .exercise-description:hover {
            box-shadow: 0 4px 12px rgba(6, 182, 212, 0.15);
        }

        .form-section {
            background: var(--bg-card);
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 25px;
            border-left: 4px solid var(--primary);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .form-section:hover {
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.15);
        }

        @media (max-width: 768px) {
            .form-section {
                padding: 15px;
            }
        }

        .form-title {
            color: var(--primary);
            font-size: 1.2rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            color: var(--text-secondary);
            margin-bottom: 8px;
            font-weight: 600;
        }

        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            padding: 12px;
            background: var(--bg-main);
            border: 2px solid var(--border);
            border-radius: 8px;
            color: var(--text-primary);
            font-size: 1rem;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .form-input:hover,
        .form-select:hover,
        .form-textarea:hover {
            border-color: var(--secondary);
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15), 0 0 12px rgba(79, 70, 229, 0.1);
            transform: translateY(-1px);
        }

        .form-textarea {
            resize: vertical;
            min-height: 100px;
            font-family: inherit;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            justify-content: center;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-success {
            background: var(--success);
            color: white;
        }

        .btn-success:hover {
            background: #059669;
            transform: translateY(-2px);
        }

        .btn-error {
            background: var(--error);
            color: white;
        }

        .btn-error:hover {
            background: #dc2626;
        }

        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        @media (max-width: 480px) {
            .form-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }

        .solution-section {
            background: var(--bg-card);
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 25px;
            border-left: 4px solid var(--success);
        }

        .solution-title {
            color: var(--success);
            font-size: 1.3rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .solution-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        @media (max-width: 768px) {
            .solution-grid {
                grid-template-columns: 1fr;
            }
        }

        .solution-box {
            background: linear-gradient(135deg, var(--bg-main) 0%, #0f172a 100%);
            padding: 24px;
            border-radius: 10px;
            border: 1px solid rgba(71, 85, 105, 0.4);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.03);
            transition: transform 0.2s cubic-bezier(0.4, 0, 0.2, 1), border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .solution-box:hover {
            transform: translateY(-3px);
            border-color: rgba(71, 85, 105, 0.6);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25), inset 0 1px 0 rgba(255, 255, 255, 0.05);
        }

        .solution-box-title {
            color: var(--secondary);
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 1.15rem;
            display: flex;
            align-items: center;
            gap: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .solution-result {
            background: linear-gradient(135deg, var(--bg-secondary) 0%, #1e293b 100%);
            padding: 16px 18px;
            border-radius: 8px;
            font-family: 'Fira Code', 'Courier New', Courier, monospace;
            color: var(--text-primary);
            min-height: 70px;
            border-left: 4px solid var(--success);
            word-wrap: break-word;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.05);
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .collapsible-section {
            margin-bottom: 20px;
            border-radius: 8px;
            overflow: hidden;
            background: var(--bg-card);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.2s ease;
        }

        .collapsible-section:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .collapsible-header {
            background: linear-gradient(135deg, var(--bg-card) 0%, #334155 100%);
            padding: 16px 20px;
            border-radius: 0;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: padding 0.2s cubic-bezier(0.4, 0, 0.2, 1), background 0.2s ease;
            border-left: 4px solid var(--warning);
            user-select: none;
        }

        .collapsible-header:hover {
            background: linear-gradient(135deg, #334155 0%, #475569 100%);
            padding-left: 24px;
        }

        .collapsible-header.active {
            border-left-color: var(--success);
        }

        .collapsible-title {
            font-weight: 600;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        @media (max-width: 768px) {
            .collapsible-title {
                font-size: 0.95rem;
            }
        }

        .collapsible-icon {
            transition: transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 1.3rem;
            color: var(--secondary);
        }

        .collapsible-header.active .collapsible-icon {
            transform: rotate(180deg);
            color: var(--success);
        }

        .collapsible-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
        }

        .collapsible-content.open {
            max-height: 2000px;
            margin-top: 15px;
            opacity: 1;
            transition: max-height 0.25s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.15s ease-out;
        }

        /* ========================================
           CONTENEDOR DE CÓDIGO
           Estructura: Header + Wrapper con scrolling
           max-height: 500px para limitar espacioque ocupa
           ======================================== */
        .code-container {
            background: linear-gradient(135deg, var(--code-bg) 0%, #0f172a 100%);
            /* Gradiente de fondo */
            padding: 0;
            /* Sin padding (lo tiene el wrapper) */
            border-radius: 12px;
            border: 1px solid rgba(71, 85, 105, 0.5);
            position: relative;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.05);
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            display: flex;
            /* Layout flexible */
            flex-direction: column;
            /* Apila elementos verticalmente */
            max-height: 500px;
            /* Limita altura para código largo */
            overflow: hidden;
            /* Oculta contenido que excede */
        }

        .code-container:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.08);
            border-color: rgba(71, 85, 105, 0.8);
            /* Borde más visible en hover */
        }

        /* Header del código: muestra lenguaje (PHP/JS) y botones de acción */
        .code-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 16px;
            border-bottom: 1px solid rgba(71, 85, 105, 0.3);
            background: rgba(0, 0, 0, 0.2);
            display: flex;
            /* Layout horizontal */
            justify-content: space-between;
            /* Separa contenido a los lados */
            align-items: center;
            /* Alinea verticalmente */
            gap: 12px;
            /* Espacio entre elementos */
        }

        /* Etiqueta de lenguaje (ej: "PHP", "JavaScript") */
        .code-lang {
            font-size: 0.85rem;
            color: var(--text-secondary);
            font-weight: 600;
            text-transform: uppercase;
            /* Convierte a mayúsculas */
            letter-spacing: 0.5px;
        }

        /* Contenedor de botones de acción (copiar, expandir, etc) */
        .code-actions {
            display: flex;
            /* Layout horizontal */
            gap: 8px;
            /* Espacio entre botones */
            align-items: center;
            /* Alinea verticalmente */
        }

        /* Botón para expandir código a fullscreen/modal */
        .code-expand-btn {
            padding: 6px 10px;
            background: transparent;
            color: var(--secondary);
            border: 1px solid rgba(6, 182, 212, 0.3);
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.8rem;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .code-expand-btn:hover {
            background: rgba(6, 182, 212, 0.1);
            border-color: rgba(6, 182, 212, 0.6);
            color: var(--secondary);
        }

        .code-wrapper {
            overflow-x: auto;
            overflow-y: auto;
            flex: 1;
            padding: 16px;
        }

        .code-wrapper::-webkit-scrollbar {
            height: 6px;
            width: 6px;
        }

        .code-wrapper::-webkit-scrollbar-track {
            background: rgba(71, 85, 105, 0.1);
        }

        .code-wrapper::-webkit-scrollbar-thumb {
            background: rgba(71, 85, 105, 0.3);
            border-radius: 3px;
        }

        .code-wrapper::-webkit-scrollbar-thumb:hover {
            background: rgba(71, 85, 105, 0.5);
        }

        .copy-btn {
            padding: 6px 12px;
            background: linear-gradient(135deg, var(--success) 0%, #059669 100%);
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.8rem;
            font-weight: 600;
            transition: transform 0.2s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.2s ease;
            box-shadow: 0 2px 6px rgba(16, 185, 129, 0.3);
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .copy-btn:hover {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.5);
        }

        .copy-btn:active {
            transform: translateY(0);
            box-shadow: 0 2px 4px rgba(16, 185, 129, 0.3);
        }

        /* Code Header and Language Label */
        .code-header {
            padding: 12px 16px;
            border-bottom: 1px solid rgba(71, 85, 105, 0.3);
            background: rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
        }

        .code-lang {
            font-size: 0.85rem;
            color: var(--secondary);
            font-weight: 600;
            padding: 4px 8px;
            background: rgba(6, 182, 212, 0.1);
            border-radius: 4px;
            border: 1px solid rgba(6, 182, 212, 0.2);
        }

        .code-actions {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        pre {
            margin: 0;
            white-space: pre-wrap;
            word-wrap: break-word;
            font-size: 0.95rem;
            line-height: 1.6;
            letter-spacing: 0.3px;
        }

        code {
            font-family: 'Fira Code', 'Courier New', Courier, monospace;
            font-size: 0.95rem;
            color: #a5d6ff;
            transition: all 0.2s ease;
        }

        @media (max-width: 768px) {
            code {
                font-size: 0.85rem;
            }
        }

        /* Diagram Container (similar to code-container) */
        .diagram-container {
            max-height: 600px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            border-radius: 12px;
            border: 1px solid rgba(71, 85, 105, 0.2);
            background: rgba(0, 0, 0, 0.3);
        }

        .diagram-header {
            padding: 12px 16px;
            border-bottom: 1px solid rgba(71, 85, 105, 0.3);
            background: rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
        }

        .diagram-title {
            font-size: 0.9rem;
            color: var(--text-secondary);
            font-weight: 500;
            flex: 1;
        }

        .diagram-expand-btn {
            padding: 6px 10px;
            background: transparent;
            border: 1px solid rgba(6, 182, 212, 0.3);
            color: var(--secondary);
            cursor: pointer;
            border-radius: 6px;
            font-size: 0.85rem;
            transition: all 0.2s ease;
            white-space: nowrap;
        }

        .diagram-expand-btn:hover {
            background: rgba(6, 182, 212, 0.1);
            border-color: var(--secondary);
            box-shadow: 0 0 12px rgba(6, 182, 212, 0.3);
        }

        .diagram-content {
            display: flex;
            flex-direction: column;
            flex: 1;
            overflow: hidden;
        }

        .diagram-wrapper {
            overflow-x: auto;
            overflow-y: auto;
            flex: 1;
            padding: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 300px;
        }

        .diagram-wrapper::-webkit-scrollbar {
            height: 6px;
            width: 6px;
        }

        .diagram-wrapper::-webkit-scrollbar-track {
            background: rgba(71, 85, 105, 0.1);
        }

        .diagram-wrapper::-webkit-scrollbar-thumb {
            background: rgba(71, 85, 105, 0.3);
            border-radius: 3px;
        }

        .diagram-wrapper::-webkit-scrollbar-thumb:hover {
            background: rgba(71, 85, 105, 0.5);
        }

        /* Placeholder para contenido faltante */
        .diagram-placeholder {
            color: var(--text-secondary);
            font-style: italic;
            font-size: 1.1rem;
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 20px;
        }

        .syntax-keyword {
            color: #ff79c6;
            font-weight: 600;
        }

        .syntax-string {
            color: #50fa7b;
        }

        .syntax-comment {
            color: #6272a4;
            font-style: italic;
            opacity: 0.9;
        }

        .syntax-function {
            color: #8be9fd;
            font-weight: 500;
        }

        .syntax-variable {
            color: #f1fa8c;
        }

        .syntax-operator {
            color: #ff79c6;
        }

        .syntax-number {
            color: #bd93f9;
        }

        .syntax-function {
            color: #8be9fd;
        }

        .syntax-variable {
            color: #f1fa8c;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-secondary);
            margin-top: 40px;
            border-top: 1px solid var(--border);
        }

        @media (max-width: 768px) {
            footer {
                font-size: 0.9rem;
            }

            /* Responsividad para contenedores de código en móvil */
            .code-container {
                max-height: 400px;
            }

            .code-header {
                flex-wrap: wrap;
            }

            .code-actions {
                width: 100%;
                justify-content: flex-end;
            }

            .copy-btn {
                font-size: 0.75rem;
                padding: 5px 10px;
            }

            /* Responsividad para diagrama en móvil */
            .diagram-container {
                max-height: 450px;
            }

            .diagram-header {
                flex-wrap: wrap;
            }

            .diagram-expand-btn {
                font-size: 0.8rem;
                width: 100%;
                text-align: center;
            }

            .diagram-wrapper {
                min-height: 250px;
            }

            /* Mejor espaciado en móvil */
            .collapsible-section {
                margin-bottom: 16px;
            }

            pre {
                font-size: 0.85rem;
                line-height: 1.5;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

    <header>
        <div class="container">
            <div class="header-content">
                <div>
                    <h1>📘 Aprende PHP con Ejercicios</h1>
                    <p class="subtitle">Autor: Luis José Sánchez</p>
                </div>
                <button class="toggle-menu-btn" onclick="toggleSidebar()">☰ Menú</button>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="main-grid">
            <aside class="sidebar" id="sidebar">
                <div class="sidebar-header">
                    <h3>📚 Índice</h3>
                    <button class="toggle-index-btn" onclick="toggleIndexCollapse()" title="Colapsar/Expandir índice">
                        <span class="toggle-index-icon">◀</span>
                    </button>
                    <button class="close-sidebar-btn" onclick="closeSidebar()">✕</button>
                </div>
                <ul class="chapter-accordion" id="chapterAccordion"></ul>
            </aside>

            <main class="content-area">
                <div class="exercise-header">
                    <h2 class="exercise-title" id="exerciseTitle">Selecciona un ejercicio</h2>
                    <div class="exercise-meta">
                        <span class="badge badge-chapter" id="chapterBadge">Capítulo 1</span>
                        <span class="badge badge-difficulty" id="difficultyBadge">Fácil</span>
                    </div>
                </div>

                <div class="exercise-description" id="exerciseDescription">
                    <p><strong>📝 Descripción:</strong></p>
                    <p>Selecciona un ejercicio del menú para comenzar. Ingresa los datos, ejecuta y compara las soluciones en PHP y JavaScript.</p>
                </div>

                <div class="form-section">
                    <h3 class="form-title">📋 Datos de Entrada</h3>
                    <form id="exerciseForm" onsubmit="return handleSubmit(event)">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" for="input1">Dato 1:</label>
                                <input type="text" id="input1" class="form-input" placeholder="Ingresa un valor">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="input2">Dato 2:</label>
                                <input type="text" id="input2" class="form-input" placeholder="Ingresa un valor">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="input3">Dato adicional:</label>
                            <textarea id="input3" class="form-textarea" placeholder="Información adicional (opcional)"></textarea>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">▶️ Ejecutar</button>
                            <button type="button" class="btn btn-error" onclick="clearForm()">🗑️ Limpiar</button>
                        </div>
                    </form>
                </div>

                <div class="solution-section" id="solutionSection">
                    <h3 class="solution-title">✅ Resultados</h3>
                    <div class="solution-grid">
                        <div class="solution-box">
                            <div class="solution-box-title">🐘 PHP</div>
                            <div class="solution-result" id="phpResult">Esperando ejecución...</div>
                        </div>
                        <div class="solution-box">
                            <div class="solution-box-title">⚡ JavaScript</div>
                            <div class="solution-result" id="jsResult">Esperando ejecución...</div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-section">
                    <div class="collapsible-header" onclick="toggleCollapsible(this)">
                        <span class="collapsible-title">💻 Ver Código PHP</span>
                        <span class="collapsible-icon">▼</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="code-container">
                            <div class="code-header">
                                <span class="code-lang">PHP</span>
                                <div class="code-actions">
                                    <button class="copy-btn" onclick="copyCode('phpCode')" title="Copiar código">📋 Copiar</button>
                                </div>
                            </div>
                            <div class="code-wrapper">
                                <pre><code id="phpCode"><span class="syntax-comment">// Código PHP</span>
<span class="syntax-keyword">&lt;?php</span>
<span class="syntax-variable">$dato1</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato1'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-variable">$dato2</span> = <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'dato2'</span>];
<span class="syntax-keyword">?&gt;</span></code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-section">
                    <div class="collapsible-header" onclick="toggleCollapsible(this)">
                        <span class="collapsible-title">⚡ Ver Código JavaScript</span>
                        <span class="collapsible-icon">▼</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="code-container">
                            <div class="code-header">
                                <span class="code-lang">JavaScript</span>
                                <div class="code-actions">
                                    <button class="copy-btn" onclick="copyCode('jsCode')" title="Copiar código">📋 Copiar</button>
                                </div>
                            </div>
                            <div class="code-wrapper">
                                <pre><code id="jsCode"><span class="syntax-comment">// Código JavaScript</span>
<span class="syntax-keyword">function</span> <span class="syntax-function">resolver</span>(<span class="syntax-variable">dato1</span>, <span class="syntax-variable">dato2</span>) {
    <span class="syntax-keyword">return</span> resultado;
}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapsible-section">
                    <div class="collapsible-header" onclick="toggleCollapsible(this)">
                        <span class="collapsible-title">📊 Ver Diagrama</span>
                        <span class="collapsible-icon">▼</span>
                    </div>
                    <div class="collapsible-content">
                        <div class="diagram-container">
                            <div class="diagram-header">
                                <span class="diagram-title">Diagrama de Flujo</span>
                                <button class="diagram-expand-btn" title="Expandir diagrama">🔍 Expandir</button>
                            </div>
                            <div class="diagram-content">
                                <div class="diagram-wrapper">
                                    <div class="diagram-placeholder">
                                        🖼️ Espacio para diagrama de flujo
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <footer>
        <p>📚 "Aprende PHP con Ejercicios" - Luis José Sánchez</p>
    </footer>

    <script>
        const chapters = [{
                id: 1,
                name: "Salida por pantalla",
                exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3", "Ejercicio 4", "Ejercicio 5"]
            },
            {
                id: 2,
                name: "Variables",
                exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3", "Ejercicio 4"]
            },
            {
                id: 3,
                name: "Lectura de datos",
                exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3"]
            },
            {
                id: 4,
                name: "Condicionales",
                exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3", "Ejercicio 4", "Ejercicio 5", "Ejercicio 6"]
            },
            {
                id: 5,
                name: "Bucles",
                exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3", "Ejercicio 4", "Ejercicio 5"]
            },
            {
                id: 6,
                name: "Números aleatorios",
                exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3"]
            },
            {
                id: 7,
                name: "Arrays",
                exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3", "Ejercicio 4"]
            },
            {
                id: 8,
                name: "Funciones",
                exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3"]
            },
            {
                id: 9,
                name: "Formularios",
                exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3", "Ejercicio 4"]
            },
            {
                id: 10,
                name: "POO",
                exercises: ["Ejercicio 1", "Ejercicio 2", "Ejercicio 3"]
            }
        ];

        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('active');
            document.getElementById('sidebarOverlay').classList.toggle('active');
        }

        function closeSidebar() {
            document.getElementById('sidebar').classList.remove('active');
            document.getElementById('sidebarOverlay').classList.remove('active');
        }

        // Soporte para tecla Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                const sidebar = document.getElementById('sidebar');
                if (sidebar.classList.contains('active')) {
                    closeSidebar();
                }
            }
        });

        function toggleIndexCollapse() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
            // Guardar estado en localStorage
            const isCollapsed = sidebar.classList.contains('collapsed');
            localStorage.setItem('indexCollapsed', isCollapsed);
        }

        function restoreIndexCollapseState() {
            const isCollapsed = localStorage.getItem('indexCollapsed') === 'true';
            const sidebar = document.getElementById('sidebar');
            if (isCollapsed) {
                sidebar.classList.add('collapsed');
            }
        }

        function generateChapters() {
            const accordion = document.getElementById('chapterAccordion');

            chapters.forEach(chapter => {
                const li = document.createElement('li');
                const header = document.createElement('div');
                header.className = 'chapter-header';
                header.id = `chapter-${chapter.id}`;
                header.innerHTML = `<span>📖 Cap ${chapter.id}: ${chapter.name}</span><span class="chapter-icon">▼</span>`;
                header.onclick = (e) => {
                    e.stopPropagation();
                    toggleChapter(chapter.id, header);
                };

                const exercisesList = document.createElement('div');
                exercisesList.className = 'exercises-list';
                exercisesList.id = `exercises-${chapter.id}`;

                chapter.exercises.forEach((exercise, index) => {
                    const exerciseDiv = document.createElement('div');
                    exerciseDiv.className = 'exercise-item';
                    exerciseDiv.id = `exercise-${chapter.id}-${index + 1}`;
                    exerciseDiv.textContent = exercise;
                    exerciseDiv.onclick = (e) => {
                        e.stopPropagation();
                        loadExercise(chapter.id, index + 1, exerciseDiv);
                    };
                    exercisesList.appendChild(exerciseDiv);
                });

                li.appendChild(header);
                li.appendChild(exercisesList);
                accordion.appendChild(li);
            });

            // Restaurar estado del índice colapsado
            restoreIndexCollapseState();
        }

        function toggleChapter(chapterId, headerElement) {
            const exercisesList = document.getElementById(`exercises-${chapterId}`);
            headerElement.classList.toggle('active');
            exercisesList.classList.toggle('open');
        }

        function loadExercise(chapterId, exerciseNum, exerciseElement) {
            if (window.innerWidth <= 968) closeSidebar();

            // Remover clase active de todos los items
            document.querySelectorAll('.exercise-item').forEach(item => item.classList.remove('active'));
            exerciseElement.classList.add('active');

            // Marcar capítulo como activo visualmente
            document.querySelectorAll('.chapter-header').forEach(header => header.classList.remove('active'));
            const activeChapter = document.getElementById(`chapter-${chapterId}`);
            if (activeChapter) {
                activeChapter.classList.add('active');
            }

            document.getElementById('exerciseTitle').textContent = `Capítulo ${chapterId} - Ejercicio ${exerciseNum}`;
            document.getElementById('chapterBadge').textContent = `Capítulo ${chapterId}`;
            document.getElementById('exerciseDescription').innerHTML = `
                <p><strong>📝 Descripción del ejercicio ${exerciseNum}:</strong></p>
                <p>Este es un ejemplo de descripción del ejercicio ${exerciseNum} del capítulo ${chapterId}.</p>
            `;
        }

        /* Alterna visibilidad de secciones colapsables
           Utilizado para: Ver Código PHP, Ver Código JS, Ver Diagrama */
        function toggleCollapsible(header) {
            header.classList.toggle('active'); /* Marca header como activo */
            header.nextElementSibling.classList.toggle('open'); /* Abre/cierra contenido */
        }

        /* Maneja el envío del formulario de ejercicio */
        function handleSubmit(event) {
            event.preventDefault(); /* Evita recarga de página */
            const input1 = document.getElementById('input1').value;
            const input2 = document.getElementById('input2').value;

            /* Calcula y muestra resultados */
            document.getElementById('phpResult').innerHTML = `<strong>Entrada:</strong> ${input1}, ${input2}<br><strong>Resultado:</strong> ${Number(input1) + Number(input2)}`;
            document.getElementById('jsResult').innerHTML = `<strong>Entrada:</strong> ${input1}, ${input2}<br><strong>Resultado:</strong> ${Number(input1) + Number(input2)}`;

            /* Scroll suave hasta la sección de soluciones */
            document.getElementById('solutionSection').scrollIntoView({
                behavior: 'smooth',
                block: 'nearest'
            });
            return false;
        }

        /* Limpia todos los campos del formulario */
        function clearForm() {
            document.getElementById('exerciseForm').reset(); /* Reset nativo del formulario */
        }

        /* Copia código al portapapeles con feedback visual
           1. Intenta usar Clipboard API (navegadores modernos)
           2. Si falla, usa fallback con textarea (navegadores antiguos)
           3. Muestra feedback visual (cambio de color/texto) por 2 segundos */
        function copyCode(elementId) {
            const code = document.getElementById(elementId).textContent; /* Obtiene el código */
            const btn = event.target; /* Botón que fue clickeado */

            /* Intenta copiar usando Clipboard API (recomendado) */
            navigator.clipboard.writeText(code).then(() => {
                /* Éxito: Muestra feedback visual */
                const originalText = btn.innerHTML; /* Guarda texto original */

                /* Cambia apariencia del botón para feedback */
                btn.innerHTML = '✅ Copiado';
                btn.style.background = 'linear-gradient(135deg, #10b981 0%, #059669 100%)';
                btn.style.boxShadow = '0 4px 12px rgba(16, 185, 129, 0.5)';

                /* Restaura el botón después de 2 segundos */
                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.style.background = ''; /* Quita estilos en línea */
                    btn.style.boxShadow = '';
                }, 2000);

            }).catch(err => {
                /* Fallback para navegadores sin Clipboard API */
                const textarea = document.createElement('textarea'); /* Crea textarea temporal */
                textarea.value = code;
                document.body.appendChild(textarea); /* Lo añade al DOM */
                textarea.select(); /* Selecciona el texto */
                document.execCommand('copy'); /* Copia el texto seleccionado */
                document.body.removeChild(textarea); /* Elimina el textarea */

                /* Muestra feedback visual igual */
                const originalText = btn.innerHTML;
                btn.innerHTML = '✅ Copiado';
                setTimeout(() => {
                    btn.innerHTML = originalText;
                }, 2000);
            });
        }

        /* Expande diagrama a fullscreen o modal
           Función preparada para futuras mejoras (modal/fullscreen) */
        function expandDiagram(event) {
            event.stopPropagation(); /* Evita que el click cierre el colapsable */

            /* TODO: Implementar una de estas opciones:
               1. Mostrar imagen en modal fullscreen
               2. Abrir imagen en pestaña nueva
               3. Mostrar zoom interactivo
               4. Mostrar lightbox */
            console.log('Expandir diagrama - Lógica a implementar');
        }

        /* Inicialización cuando el DOM está completamente cargado */
        document.addEventListener('DOMContentLoaded', () => {
            /* 1. Genera la estructura de capítulos y ejercicios */
            generateChapters();

            /* 2. Activa scroll suave en toda la página */
            document.documentElement.style.scrollBehavior = 'smooth';

            /* 3. Agrega event listeners a todos los botones de expandir diagrama */
            document.querySelectorAll('.diagram-expand-btn').forEach(btn => {
                btn.addEventListener('click', expandDiagram);
            });
        });
    </script>
</body>

</html>