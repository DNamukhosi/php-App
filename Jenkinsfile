node("docker") {
    docker.withRegistry('<<https://hub.docker.com/r/neke/dnamukhosi>>', '<<2wsxCDE#$RFV>>') {
    
        git url: "<<https://github.com/DamarisNamukhosi>>", credentialsId: '<<Namukhosi@123>>'
    
        sh "git rev-parse HEAD > .git/commit-id"
        def commit_id = readFile('.git/commit-id').trim()
        println commit_id
    
        stage "build"
        def app = docker.build "patient.php"
    
        stage "publish"
        app.push 'master'
        app.push "${commit_id}"
    }
}
