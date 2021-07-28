import http from "k6/http";
import { check, sleep } from "k6";

// Common things
const API_URL = "http://127.0.0.1:8000/api";
// const API_TOKEN = "YOUR_GOREST_API_TOKEN";

// Test setup
export let options = {
    vus: 10,
    duration: '30s'
};

// Test scenario
export default function () {

    // Common requests params
    // const params = { headers: { "Authorization": `Bearer ${API_TOKEN}` } };

    // Random e-mail suffix
    let randomInt = Math.floor(Math.random() * 1000000);

    // Create user
    let createUserResponse = http.post(
        `${API_URL}/users`,
        {
            "name": "John Doe",
            "email": `john.doe+${randomInt}@gmail.com`,
        }
    );
    check(
        createUserResponse,
        { "Create user response status code is 200": (r) => r.status == 200 }
    );

    // Get user 
    let getUserResponse = http.get(
        `${API_URL}/users/${JSON.parse(createUserResponse.body).data.id}`,
        params
    )
    check(
        getUserResponse,
        { "Get user response status code is 200": (r) => r.status == 200 }
    );

    // Update user data
    let patchUserResponse = http.patch(
        `${API_URL}/users/${JSON.parse(createUserResponse.body).data.id}`,
        {
            "username": "toto"
        },
        params
    )
    check(
        patchUserResponse,
        { "Update user response status code is 200": (r) => r.status == 200 }
    );

    // Delete user
    let deleteUserResponse = http.del(
        `${API_URL}/users/${JSON.parse(createUserResponse.body).data.id}`,
        params
    )
    check(
        deleteUserResponse,
        { "Delete user response status code is 200": (r) => r.status == 200 }
    );

    // Short break between iterations
    sleep(0.5);
}