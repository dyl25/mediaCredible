<template>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Site</th>
                    <th><i class="fas fa-arrow-up text-success"></i> Upvotes</th>
                    <th><i class="fas fa-arrow-down text-danger"></i> Downvotes</th>
                    <th>Date d'ajout</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>blabla</td>
                    <td>
                        <a href="#">fsdfsdff</a>
                    </td>
                    <td>
                        <span class="text-success">402</span>
                    </td>
                    <td>
                        <span class="text-danger">205</span>
                    </td>
                    <td>3/9/2018</td>
                    <td>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Editer">
                            <i class="fas fa-pen fa-lg text-success"></i>
                        </a>
                        <form class="d-inline" action="#" method="POST">
                            <button class="btn btn-link" type="submit" data-toggle="tooltip" data-placement="bottom" title="Supprimer">
                                <i class="fas fa-trash fa-lg text-danger"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    mounted() {
        this.loadMedias();
        console.log("Component mounted.");
        this.loadMedias();
    },
    methods: {
        loadMedias() {
            /*let response = await fetch('/api/medias');
            console.log(response);*/
            fetch('/api/medias')
                .then(response => console.log(response));
        }
    }
};
</script>