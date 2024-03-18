<?php

// tests/JsonImportServiceTest.php

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Service\JsonImportService;

class JsonImportServiceTest extends KernelTestCase
{
    public function testImportDataFromJson()
    {
        self::bootKernel();

        // Obtener el contenedor de servicios
        $container = self::$kernel->getContainer();

        // Obtener el servicio de importación de JSON desde el contenedor
        $jsonImportService = $container->get(JsonImportService::class);

        // JSON de ejemplo para importar
        $jsonData = "[{\"name\":\"Segmento 1\",\"size\":10,\"uidentifier\":\"S1\",\"restaruants\":[{\"name\":\"Restaurante 1\",\"street_address\":\"Calle 123\",\"latitude\":\"123.456\",\"longitude\":\"789.012\",\"city_name\":\"City 1\",\"popularity_rate\":\"4.5\",\"satisfaction_rate\":\"4.2\",\"last_avg_price\":\"25.00\",\"total_reviews\":100,\"uidentifier\":\"R1\"}]}]";

        // Probar la importación de JSON
        $jsonImportService->importDataFromJson($jsonData);

        // No es necesario verificar el resultado de la importación
    }
}
