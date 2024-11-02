function atualizarAvatar(event) {
    const file = event.target.files[0];
    if (file) {
        // Pré-visualizar a imagem antes do upload
        const reader = new FileReader();
        reader.onload = function(e) {
            const avatar = document.getElementById('avatar');
            avatar.src = e.target.result;
        };
        reader.readAsDataURL(file);

        // Criar um objeto FormData para enviar o arquivo via AJAX
        const formData = new FormData();
        formData.append('imagem', file);

        // Enviar o arquivo via AJAX
        fetch('/UserController.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data.includes('../perfimg/')) {
                // Atualizar a imagem do avatar com o caminho retornado
                document.getElementById('avatar').src = data;
            } else {
                alert("Erro ao atualizar avatar: " + data);
            }
        })
        .catch(error => {
            console.error('Erro:', error);
        });
    }
}