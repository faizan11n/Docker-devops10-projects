# --- Stage 1: Build ---
# Use the full Go toolchain image to compile the binary
FROM golang:1.22-alpine AS builder

WORKDIR /app

# Copy go.mod first (better layer caching)
COPY go.mod ./

# Copy source code
COPY main.go ./

# Compile a statically-linked binary named "server"
RUN go build -o server main.go

# --- Stage 2: Run ---
# Use a tiny base image for the final container (no Go toolchain needed)
FROM alpine:latest

WORKDIR /app

# Copy only the compiled binary from the builder stage
COPY --from=builder /app/server .

EXPOSE 8080

CMD ["./server"]
