# Proyecto Fin de Año - UTU 🎄💻

**Proyecto Fin de Año - UTU** es un sistema desarrollado para modernizar la experiencia del cliente en restaurantes mediante menús digitales y la automatización de procesos clave. Este proyecto optimiza la comunicación interna y gestiona reservas de manera eficiente para mejorar las operaciones del restaurante y la satisfacción del cliente.

## Descripción 📋

El objetivo principal del proyecto fue **modernizar y optimizar la gestión interna y externa de un restaurante**. La solución incluye menús digitales para los clientes, automatización de pedidos entre mozos y cocina. Estas herramientas buscan ahorrar tiempo, reducir errores y brindar una experiencia moderna a los clientes.

## Características principales 🚀

1. **Menús digitales:**
   - Visualización interactiva de menús desde dispositivos digitales.
   - Pedidos automatizados enviados directamente a la cocina.

2. **Gestión de reservas:**
   - Sistema intuitivo para registrar y organizar reservas en tiempo real.
   - Confirmaciones automáticas para disponibilidad de mesas.

3. **Automatización de procesos internos:**
   - Comunicación directa y sin errores entre mozos y cocina.
   - Mejora en los tiempos de respuesta y precisión de los pedidos.

4. **Diseño moderno y responsive:**
   - Interfaz atractiva y fácil de usar, creada con **Bootstrap**.

## Requerimientos implementados 📋

El proyecto logró implementar el **81% de los requerimientos funcionales acordados**, los cuales se detallan a continuación:

### Gestión de Órdenes 💎
- **RF1:** Comprobar orden
- **RF2:** Alta orden
- **RF3:** Baja orden
- **RF4:** Modificar orden
- **RF5:** Listar orden
- **RF6:** Buscar orden

### Gestión de Mesas 🍽️
- **RF7:** Comprobar mesa
- **RF8:** Alta mesa
- **RF9:** Baja mesa
- **RF10:** Modificar mesa
- **RF11:** Listar mesa
- **RF12:** Buscar mesa

### Gestión de Personal 👥
- **RF19:** Alta personal
- **RF20:** Baja personal
- **RF21:** Modificar personal
- **RF22:** Listar personal
- **RF23:** Buscar personal
- **RF24:** Comprobar personal

### Gestión de Productos 🛒
- **RF31:** Comprobar producto
- **RF32:** Alta producto
- **RF33:** Baja producto
- **RF34:** Modificar producto
- **RF35:** Listar producto
- **RF36:** Buscar producto

### Gestión de Reservas 📅
- **RF43:** Alta reserva
- **RF44:** Baja reserva
- **RF45:** Modificar reserva
- **RF46:** Listar reserva
- **RF47:** Comprobar reserva
- **RF48:** Buscar reserva

### Gestión de Usuarios 🔑
- **RF49:** Comprobar usuarios
- **RF63:** Alta usuario del sistema
- **RF64:** Baja usuario del sistema
- **RF65:** Modificar usuario del sistema
- **RF66:** Listar usuario del sistema
- **RF67:** Comprobar usuario del sistema
- **RF68:** Buscar usuario del sistema
- **RF69:** Inicio de sesión
- **RF75:** Cerrar sesión

### Gestión de Pagos 💳
- **RF25:** Comprobar pago
- **RF26:** Alta pago
- **RF27:** Baja pago
- **RF28:** Modificar pago
- **RF29:** Listar pago
- **RF30:** Buscar pago
- **RF57:** Alta método de pago
- **RF58:** Baja método de pago
- **RF59:** Modificar método de pago
- **RF60:** Listar método de pago
- **RF61:** Comprobar método de pago
- **RF62:** Buscar método de pago

### Gestión de Menús 🍲
- **RF37:** Alta menú
- **RF38:** Baja menú
- **RF39:** Listar menú
- **RF40:** Modificar menú
- **RF41:** Comprobar menú
- **RF42:** Buscar menú
- **RF71:** Categorizar productos por menú
- **RF72:** Categorizar productos por tipo
- **RF73:** Categorizar productos por aptitud (celíaco, vegano, vegetariano)
- **RF76:** Ver menú

### Otros requerimientos funcionales ⚙️
- **RF50:** Organizar órdenes

## Tecnologías utilizadas 🛠️

- **Backend:** PHP 7+
- **Base de datos:** MySQL
- **Frontend:** HTML5, CSS3, Bootstrap
- **Servidor:** Apache (XAMPP o LAMP recomendado)

## Requisitos del sistema ✅

1. **Servidor web:**
   - Recomendado: Apache (incluido en XAMPP o LAMP).

2. **PHP:**
   - Versión 7.4 o superior.

3. **Base de datos:**
   - MySQL o MariaDB.

4. **Navegador web:**
   - Compatible con las últimas versiones de Chrome, Firefox, Edge o Safari.

## Instalación ⚙️

### 1. Clonar el repositorio:
```bash
git clone https://github.com/brokwh/proyecto.git
```

### 2. Configurar el entorno:
- Instala un servidor local como XAMPP o LAMP.
- Coloca los archivos del proyecto en el directorio raíz del servidor (`htdocs` en XAMPP).

### 3. Configurar la base de datos:
- Crea una nueva base de datos en MySQL.
- Importa el archivo `database.sql` (incluido en el repositorio) utilizando phpMyAdmin o una herramienta similar.

### 4. Configurar el archivo de conexión:
- Edita el archivo `config.php` para agregar las credenciales de tu base de datos:
  ```php
  <?php
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'nombre_base_datos');
  ?>
  ```

### 5. Ejecutar la aplicación:
- Abre tu navegador web y accede al proyecto desde `http://localhost/proyecto`.

## Beneficios obtenidos 🎯

- **Ahorro de tiempo:** Automatización de procesos clave para reducir tiempos de espera y errores.
- **Gestión eficiente:** Control centralizado de pedidos y reservas.
- **Mayor satisfacción del cliente:** Experiencia fluida y moderna gracias a menús digitales y gestión rápida de reservas.

## Capturas de pantalla 📸

*(Incluye capturas de los menús digitales, el sistema de reservas o el panel de administración para ilustrar las funcionalidades.)*

## Equipo de desarrollo 👨‍💻👩‍💻

**Proyecto Fin de Año - UTU** fue desarrollado por:
- **Diego Pozzi** ([@diegopozzi](https://diegopozzi.com))
- **Dylan Rodríguez**
- **Brian Matos**
- **Facundo Rodríguez**