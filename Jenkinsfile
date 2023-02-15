pipeline
{
    agent any
    stages
    {
        stage('Build php-application Image')
        {
            steps
            {
                echo 'Building the php-app image ....'
                sh "docker build -t -f ./app-php/Dockerfile app-gestionproduits:1.0.${BUILD_NUMBER} ."
            }
        }

        stage('Build mySql-db Image')
        {
            steps
            {
                echo 'Building the mySQL DB image ....'
                sh "docker build -t -f ./mysql/Dockerfile app-gestionproduits:1.0.${BUILD_NUMBER} ."
            }
        }

        stage('Show created image')
        {
            steps
            {
                echo '<<<<< Created image <<<<<'
                sh "docker images"
            }
        }

        stage('Push created image in docker-hub')
        {
            steps
            {
                echo 'Connecting to docker-hub ....'
                sh "docker login -u susanoodev -p dckr_pat_KRBr0oK0k04m4aso5yxPszicyXk"
                echo 'Pushing the app-php image in the docker-hub ....'
                sh "docker push app-gestionproduits:1.0.${BUILD_NUMBER}"
                echo 'Pushing the mySQL DB image in the docker-hub ....'
                sh "docker push app-gestionproduits:1.0.${BUILD_NUMBER}"
            }
        }        
        
        stage('Deploy container with docker compose')
        {
            steps
            {
                echo 'Deploying service via docker-compose ....'
                sh "docker-compose up -d"
            }
        }

        stage('Show created container')
        {
            steps
            {
                echo '<<<<<  Deployed containers  <<<<<'
                sh "docker ps"
            }
        }
        stage('Test Docker app-php Container') 
        {
            steps 
            {
               sh 'curl http://localhost:8090'
            }
        }

        stage('Clean Environment') 
        {
            steps
            {
                echo 'Eraising  the deployed service ....'
                sh 'docker stop app_susano'
                sh 'docker rm app_susano'
                sh 'docker stop db_susano'
                sh 'docker rm db_susano'
                sh 'docker stop phpmyadmin'
                sh 'docker rm phpmyadmin'
                echo 'Environnement cleaned successfully ....'
            }
        }
    }
    post 
    {
        success 
        {
            slackSend message:"une nouvelle version de app-gestionproduits builder avec succes - ${env.JOB_NAME} ${env.BUILD_NUMBER} (<${env.BUILD_URL}|Open>)"
        }
        failure 
        {
            slackSend failOnError:true message:"ECHEC du Build - ${env.JOB_NAME} ${env.BUILD_NUMBER} (<${env.BUILD_URL}|Open>)"
        }
    }
}