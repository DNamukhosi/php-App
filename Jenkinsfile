pipeline {

  environment {
    image_name = 'neke/dama'
    registry = "https://hub.docker.com"
    registryCredential = 'Dockerhub'
    dockerImage = ''
    remote = [:]
    remote.name = ''
    remote.host = '54.202.135.34'
    remote.user = 'ubuntu'
    remote.password = ''
    remote.allowAnyHosts = true



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
    stage('Deploy'){
        steps {
          script {
            withCredentials([sshUserPrivateKey(credentialsId: 'ubuntu', keyFileVariable: 'identity')]){
              remote.user = ''
              remote.identityFile = identity
              sshCommand remote: remote, command: 'ls /home/ubuntu/dama'

            }
          }
        }
    }
  }
}
