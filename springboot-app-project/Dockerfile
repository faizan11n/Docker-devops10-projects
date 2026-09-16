# --- Stage 1: Build the JAR using Maven ---
FROM maven:3.9-eclipse-temurin-17-alpine AS builder

WORKDIR /app

# Copy pom.xml first for better layer caching (dependencies change less often than code)
COPY pom.xml .

# Limit Maven's memory usage to avoid overwhelming small servers
ENV MAVEN_OPTS="-Xmx512m"

# Download dependencies (cached separately from source code changes)
RUN mvn dependency:go-offline -B

# Copy source code
COPY src ./src

# Build the JAR, skipping tests to save time and memory
RUN mvn clean package -DskipTests -B

# --- Stage 2: Run with a lightweight JRE (no full JDK needed) ---
FROM eclipse-temurin:17-jre-alpine

WORKDIR /app

# Copy only the built JAR from the builder stage
COPY --from=builder /app/target/*.jar app.jar

EXPOSE 8080

CMD ["java", "-jar", "app.jar"]
