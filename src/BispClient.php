<?php

const BASE_URL = "https://presos.seguranca.mg.gov.br";

class BispClient
{
    public function __construct(private string $baseUrl = BASE_URL) {}
}
