FROM node:20
WORKDIR /apps
COPY package*.json ./
RUN npm install
COPY . .
COPY .env .env
EXPOSE 3000
CMD ["node", "app.js"]

