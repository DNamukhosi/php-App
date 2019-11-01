pipeline {

  environment {
    imageName = 'neke/phpApp'
    registryUrl = "https://hub.docker.com/"
    registryCredential = 'neke'
    dockerImage = ''
  

  }

  agent any

  stages {
    
    stage ('Build Image - Stable') {
      
      steps {
        script {
          dockerImage = docker.build imageName + ":stable"
        }
      }
    }
     
    stage('Push Image to Registry') {
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