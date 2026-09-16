package com.example.demo;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@SpringBootApplication
public class DemoApplication {

    public static void main(String[] args) {
        SpringApplication.run(DemoApplication.class, args);
    }
}

@RestController
class HomeController {

    @GetMapping("/")
    public String home() {
        return "Hello from Spring Boot! This app is running inside a Docker container.";
    }

    @GetMapping("/health")
    public String health() {
        return "{\"status\": \"spring boot ok\"}";
    }
}
