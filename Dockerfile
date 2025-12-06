# Use the lightweight Nginx Alpine image
FROM nginx:alpine

# Remove default Nginx website
RUN rm -rf /usr/share/nginx/html/*

# Copy your HTML file to the Nginx html directory
# We rename it to index.html so it loads automatically at the root URL
COPY bbckey.html /usr/share/nginx/html/index.html

# Expose port 80
EXPOSE 80

# Start Nginx server
CMD ["nginx", "-g", "daemon off;"]
