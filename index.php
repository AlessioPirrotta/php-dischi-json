<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
        
</head>
<body class="bg-dark text-light">
    <div id="app">
        <div class="container pt-3">
            <div class="row d-flex gap-3">
                <div @click="() => showDisc(index)" id="card" v-for="(item, index) in discs" :key="index" class="col-4 rounded-3 p-4 d-flex flex-column align-items-center">
                    <img style="width: 80%;" :src="`${item.poster}`" alt="">
                    <h4>{{item.title}}</h4>
                    <p class="mb-2" style="font-size: 20px;">{{item.author}}</p>
                    <p>{{item.year}}</p>

                </div>

            </div>

        </div>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="./main.js"></script>
</body>
</html>