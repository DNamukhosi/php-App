pipeline {

  environment {
    image_name = 'neke/dama'
    registry = "https://hub.docker.com"
    registryCredential = 'Dockerhub'
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
                    docker.withRegistry( '', registryCredential ) {
                        dockerImage.push()
                        }
                    }
                }
            }
    }

    stage('Deploy'){
        steps {
            sh 'ssh ubuntu@34.220.138.220'
        }
    }

}  
