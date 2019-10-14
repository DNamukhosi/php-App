pipeline {

  environment {
    image_name = 'neke/dama'
    registry = "https://hub.docker.com"
    registryCredential = 'Dockerhub'
    dockerImage = ''
  

  }

  agent any

  stages {
    stage('Building image develop') {
      when {
        expression {
          return env.GIT_BRANCH == "origin/develop"
}
      }
      
      steps{
        script {
          dockerImage = docker.build image_name
        }
      }
    }
    stage('Building image master') {
      when {
        expression {
          return env.GIT_BRANCH == "origin/master"
}
      }
      
      steps{
        script {
          dockerImage = docker.build image_name
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
  }     