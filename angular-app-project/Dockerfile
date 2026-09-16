# --- Stage 1: Build the Angular app ---
FROM node:20-alpine AS builder

WORKDIR /app

# Copy package files first for better layer caching
COPY package.json ./

RUN npm install

# Copy the rest of the source code
COPY . .

# Build the production bundle
RUN npm run build

# --- Stage 2: Serve with Nginx ---
FROM nginx:alpine

# Copy only the compiled output from the builder stage
COPY --from=builder /app/dist/angular-docker-app /usr/share/nginx/html

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
