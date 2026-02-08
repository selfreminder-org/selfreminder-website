pipeline {
    agent {
        docker {
            image 'php:8.4-cli'
            args '-u root'
        }
    }

    stages {
        stage('Install System Deps') {
            steps {
                sh '''
                apt update
                apt install -y unzip git libzip-dev curl
                docker-php-ext-install zip
                '''
            }
        }

        stage('Install Node.js') {
            steps {
                sh '''
                curl -fsSL https://deb.nodesource.com/setup_20.x | bash -
                apt install -y nodejs
                node -v
                npm -v
                '''
            }
        }

        stage('Install Composer') {
            steps {
                sh '''
                php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
                php composer-setup.php
                php composer.phar install --no-interaction --prefer-dist
                '''
            }
        }

        stage('NPM Install & Build') {
            steps {
                sh '''
                npm install
                npm run build
                '''
            }
        }

        stage('Laravel Setup') {
            steps {
                sh '''
                cp .env.example .env
                php artisan key:generate
                php artisan migrate --force
                '''
            }
        }
    }
}
