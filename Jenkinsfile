pipeline {

  environment {
    image_name = 'neke/dama'
    registry = "https://hub.docker.com"
    registryCredential = 'dockerhub'
    dockerImage = ''
  }

  agent any

  stages {
    stage('Building image') {
      steps{
        script {
          dockerImage = docker.build image_name + ":$BUILD_NUMBER"
        }
      }
    }
    
    stage('push image') {
        steps{
            script {
                    docker.withRegistry( registry, registryCredential ) {
                        dockerImage.push()
                        }
                    }
                }
            }
    }
}    
