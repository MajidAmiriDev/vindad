
php artisan migrate

php artisan db:seed

php artisan serve

You can now test the following routes:

GET /api/user/{id}

Description: Fetch user details along with their posts.

Example: GET http://localhost:8001/api/user/2

    {
    "id": 2,
    "name": "Jane Doe",
    "email": "jane@example.com",
    "posts": [
        {
            "id": 20,
            "title": "Sample Post 1",
            "content": "This is a sample post.",
            "created_at": "2024-12-01"
        },
        {
            "id": 21,
            "title": "Sample Post 2",
            "content": "This is another sample post.",
            "created_at": "2024-12-01"
        }
    ]
    }


GET /users-with-stats

Description: Fetch a list of users with additional statistics (e.g., post count, comment count).

Example: GET http://localhost:8001/users-with-stats


    [
        {
            "name": "Prof. Dino Keebler",
            "email": "mandy07@example.com",
            "posts_count": 6,
            "comments_count": 36,
            "latest_post": {
                "title": "Ut repudiandae repellat ut officiis rerum doloremque aut.",
                "content": "Voluptas ut et vitae dolorem quam. Tenetur quia ea excepturi corporis suscipit minus. Nihil in eligendi corrupti sunt voluptates."
            }
        },
        {
            "name": "Dana West",
            "email": "janelle62@example.com",
            "posts_count": 6,
            "comments_count": 36,
            "latest_post": {
                "title": "Iusto consequuntur similique nobis ipsam.",
                "content": "Eaque repellendus nemo iusto harum. Aut et nesciunt similique aut."
            }
        },
        {
            "name": "Rosario Hodkiewicz",
            "email": "fiona.harvey@example.com",
            "posts_count": 6,
            "comments_count": 36,
            "latest_post": {
                "title": "Id voluptatem quam porro ea vel necessitatibus.",
                "content": "Fuga enim qui doloribus dicta ut debitis tempore. Veniam est ea enim aut dolorem quibusdam explicabo. Nesciunt et sequi ipsam perferendis fugit. Et nesciunt iste ipsa nobis iste vel voluptatem."
            }
        },
        {
            "name": "Zula Skiles",
            "email": "dhermiston@example.net",
            "posts_count": 6,
            "comments_count": 36,
            "latest_post": {
                "title": "Quos cumque blanditiis consequatur molestias.",
                "content": "Maxime sint nihil harum rerum exercitationem sit. Officiis quasi molestias tempore quia dolores maxime excepturi. Sint qui quidem debitis fugiat. Ut et sed natus."
            }
        },
        {
            "name": "Ahmed Beahan",
            "email": "jodie77@example.org",
            "posts_count": 6,
            "comments_count": 36,
            "latest_post": {
                "title": "Vel aspernatur iure voluptas deserunt rerum rerum.",
                "content": "Laudantium et ducimus omnis. Earum ut facere nihil. Fugiat nostrum est nisi aliquid autem illum. Voluptas officiis neque quo odio qui quo."
            }
        },
        {
            "name": "Ruben Streich",
            "email": "larkin.jaleel@example.com",
            "posts_count": 6,
            "comments_count": 36,
            "latest_post": {
                "title": "Molestiae voluptatem ea rem omnis reprehenderit officiis ducimus.",
                "content": "Cum et voluptates libero est voluptates. Iusto quam et ut beatae velit. Rerum quia ex ut ea. Quia alias ad enim sint tempora eum ut minus."
            }
        }
    ]
