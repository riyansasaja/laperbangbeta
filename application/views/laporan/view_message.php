<div class="row mt-3">
    <div class="text-center">
        <h4><?= $this->session->flashdata('msg'); ?></h4>
        <p><?= $this->session->flashdata('properties'); ?></p>
        <button class="btn btn-primary" onclick="history.back(-1)">Kembali</button>
    </div>
</div>