USE consultorio;

CREATE TABLE pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_paciente VARCHAR(50) NOT NULL,
    documento_paciente VARCHAR(50) NOT NULL,
    correo_paciente VARCHAR(100) NOT NULL,
    telefono VARCHAR(50) NOT NULL,
    contraseña VARCHAR(255) NOT NULL
);
INSERT INTO pacientes (nombre_paciente, documento_paciente, correo_paciente, telefono, contraseña) VALUES
('Juan Pérez', '123456789', 'juan.perez@example.com', '321-654-9870', 'password123'),
('María González', '987654321', 'maria.gonzalez@example.com', '321-987-6540', 'securepass456'),
('Carlos Rodríguez', '456789123', 'carlos.rodriguez@example.com', '321-456-7890', 'mypassword789'),
('Ana Martínez', '654321987', 'ana.martinez@example.com', '321-321-3210', 'adminpass101'),
('Laura Fernández', '789123456', 'laura.fernandez@example.com', '321-852-9630', 'password2024');

CREATE TABLE formulario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_paciente VARCHAR(50) NOT NULL,
    correo_paciente VARCHAR(100) NOT NULL,
    telefono VARCHAR(50) NOT NULL,
    contraseña VARCHAR(255) NOT NULL

);CREATE TABLE f (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_paciente VARCHAR(50) NOT NULL,
    fecha_cita DATE NOT NULL,
    nombre_medico VARCHAR(100) NOT NULL,
    hora_cita TIME NOT NULL,
    FOREIGN KEY (nombre_paciente) REFERENCES pacientes(nombre_paciente)
);