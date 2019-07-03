pipeline {

  environment {
    image_name = 'neke/dama'
    registry = "https://hub.docker.com/r/neke/dama"
    registryCredential = 'Dockerhub'
    dockerImage = ''
  }

  agent any

  stages {
    stage('Building image') {
      steps{
        script {
          docker.build image_name + ":$BUILD_NUMBER"
          dockerImage = docker.build image_name + ":$BUILD_NUMBER"
        }
      }
    }
    
    stage('Deploy') {
        steps{
            script {
                    docker.withRegistry( '', registryCredential ) {
                        dockerImage.push()
                        }
                    }
                }
            }
  }
}
