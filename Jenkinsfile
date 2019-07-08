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
    stage('Deploy'){
        steps {
          script {
            def remote = [:]
            remote.name = 'B'
            remote.host = 'ec2-54-202-135-34.us-west-2.compute.amazonaws.com'
            remote.user = 'ubuntu'
            remote.allowAnyHosts = true
            
            withCredentials([sshUserPrivateKey(credentialsId: 'sshkey', keyFileVariable: 'identity')]){
              remote.user = 'ubuntu'
              remote.identityFile = identity
              sshCommand remote: remote, command: 'ls /home/ubuntu/dama'

            }
          }
        }
    }
  }
}
