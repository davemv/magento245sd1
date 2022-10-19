El módulo hace uso de la tabla console1_items, por lo que debemos correr este comando para añadir el módulo, y dicha tabla al proyecto
bin/magento setup:upgrade

Para ejecutar el comando custom, utilizar el sig comando
bin/magento vendordave:item:add "ItemAdded" "Description of added item"


Como se ve, el 1er valor ("ItemAdded") se guardará en la columna "item" de la tabla console1_items,
y el 2do valor ("Description of added item) se guardará en la columna "description" de la tabla console1_items

