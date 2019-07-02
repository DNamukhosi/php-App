pipeline {

  environment {
    registry = "https://hub.docker.com/r/neke/dama"
    registryCredential = '2wsxCDE#$RFV'
  }

  agent any

  stages {
    stage('Building image') {
      steps{
        script {
          docker.build registry + ":$BUILD_NUMBER"
        }
      }
    }
  }
}
