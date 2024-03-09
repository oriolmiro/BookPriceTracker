# Contribución al proyecto BookPriceTracker

## Paso 4: Escribe el código

Utiliza Python y las bibliotecas necesarias para escribir el código que realizará el scraping de la página web y contribuir a través de la API. Asegúrate de seguir las mejores prácticas de codificación y documenta tu código adecuadamente.

Aquí tienes un ejemplo básico para comenzar:


from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.common.exceptions import NoSuchElementException
import time

def buscar_precio_libro(isbn):
    driver = webdriver.Firefox()
    driver.get("https://www.google.com")
    time.sleep(2)
    url_amazon = f"https://www.amazon.es/s?k={isbn}"
    driver.get(url_amazon)
    time.sleep(2)
    
    # Buscar si existe el texto "No hay resultados para"
    try:
        mensaje_no_resultados = driver.find_element(By.XPATH, "//*[contains(text(), 'No hay resultados para')]")
        # Si encuentra el mensaje, imprimir mensaje y no continuar
        print("No hay resultados para la búsqueda.")
    except NoSuchElementException:
        # Si no encuentra el mensaje, continuar con el código
        try:
            enlace_producto = driver.find_elements(By.CSS_SELECTOR, 'span.a-offscreen')[0]
            print(f"Precio producto: {enlace_producto.get_attribute('innerHTML').replace('&nbsp;','')}")
        except IndexError:
            # Manejar el caso en que no se encuentren elementos que coincidan (por ejemplo, no hay productos)
            print("No se pudo encontrar el precio del producto.")
        time.sleep(2)
    
    # Cierra el navegador al final (opcional, según lo que necesites en tu código)
    driver.quit()

# Uso de la función con un ISBN específico
isbn = "9788418928948"
buscar_precio_libro(isbn)
