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
                <tr v-for="media in medias">
                    <td>{{ media.id }}</td>
                    <td>{{ media.name }}</td>
                    <td>
                        <a href="#">{{ media.website }}</a>
                    </td>
                    <td>
                        <span class="text-success">{{ media.up_votes }}</span>
                    </td>
                    <td>
                        <span class="text-danger">{{ media.down_votes }}</span>
                    </td>
                    <td>{{ media.created_at }}</td>
                    <td>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Editer">
                            <i class="fas fa-pen fa-lg text-success"></i>
                        </a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Supprimer">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                medias: []
            }
        },
        mounted() {
            this.loadMedias();
            console.log(this.medias);
        },
        methods: {
            loadMedias() {
                fetch('/api/medias')
                    .then(response => {
                        if(response.ok) {
                            this.medias = response.json  
                        }  
                    })
                    .catch( error => 
                        console.log("Problème lors du chargement des médias: "+ error.message)
                    );
            }
            /*deleteMedia() {
                fetch();
            }*/
        }
    };
</script>