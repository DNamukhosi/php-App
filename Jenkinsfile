pipeline {

  environment {
    dockerImage = ''
    imageName = 'neke/phpApp-web'
    imageTag = 'latest'
  

  }

  agent any

  stages {
    
    stage ('Build Image - Stable') {
      
      steps {
        script {
          dockerImage = docker.build imageName + ":" + imageTag
        }
      }
    }
     
    stage('Push Image to Registry') {
            steps {
                script {
                    docker.withRegistry('', 'docker-hub') {
                        dockerImage.push()
                }
            }
        }
      }
    }
  }     