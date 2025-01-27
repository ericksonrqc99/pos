<?php
return [
    "title" => "Punto de Venta",
    "group" => "Pedidos",
    "widgets" => [
        "count" => "Total de Pedidos Hoy",
        "money" => "Dinero Total de Pedidos Hoy"
    ],
    "table" => [
        "search" => 'Buscar por Nombre del Producto o Escanear Código de Barras',
        "columns" => [
            "image" => "Imagen",
            "name" => "Nombre",
            "sku" => "SKU",
            "barcode" => "Código de Barras",
            "price" => "Precio",
        ],
        "actions" => [
            "addToCart" => "Agregar al Carrito"
        ],
        "filters" => [
            "category_id" => "Categoría"
        ]
    ],
    "notifications" => [
        "delete" => [
            "title" => "Éxito",
            "message" => "Producto Eliminado del Carrito Exitosamente"
        ],
        "clear" => [
            "title" => "Éxito",
            "message" => "Carrito Vaciado Exitosamente"
        ],
        "checkout" => [
            "title" => "Éxito",
            "message" => 'El Pedido #:uuid Ha Sido Creado',
            "print" => "Imprimir Recibo",
            "view" => "Ver Pedido"
        ]
    ],
    "actions" => [
        "checkout" => [
            "label" => "Finalizar Compra",
            "form" => [
                "account_id" => "Cuenta",
                "payment_method" => "Método de Pago",
                "paid_amount" => "Cantidad Pagada",
                "coupon" => "Cupón",
            ],
            "account" => [
                "name" => "Nombre",
                "email" => "Correo Electrónico",
                "phone" => "Teléfono",
                "address" => "Dirección",
            ]
        ]
    ],
    "view" => [
        "cart" => "Carrito",
        "totals" => "Totales",
        "empty" => "No hay artículos en el carrito",
        "clear" => "Vaciar Carrito",
        "remove" => "Eliminar del Carrito",
        "subtotal" => "Subtotal",
        "discount" => "Descuento",
        "vat" => "IGV",
        "total" => "Total",
    ]
];
