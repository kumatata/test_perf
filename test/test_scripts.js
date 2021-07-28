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

    // Create Election Municipale
    let createElectionMunicipaleResponse = http.post(
        `${API_URL}/elect_municipales`,
        {      
            "codeDepartement": "76",
            "codeCommune": 2,
            "libelleDeLaCommune": "MALDIVES",
            "sexe": "F",
            "nom": "Doe",
            "prenom": "Jane",
            "dateDeNaissance": "00/00/00",
            "electionAuConseilCommunautaire": "Y"
          }
    );
    check(
        createElectionMunicipaleResponse,
        { "Create Election Municipale response status code is 200": (r) => r.status == 200 }
    );

    // Get Election Municipale
    let getElectionMunicpaleResponse = http.get(
        `${API_URL}/elect_municipales/${JSON.parse(createElectionMunicipaleResponse.body).data.id}`,
        params
    )
    check(
        getElectionMunicpaleResponse,
        { "Get election municipal response status code is 200": (r) => r.status == 200 }
    );

    // Update Election Municipale 
    let patchElectionMunicpaleResponse = http.patch(
        `${API_URL}/elect_municipales/${JSON.parse(createElectionMunicipaleResponse.body).data.id}`,
        {
            "prenom": "toto"
        },
        params
    )
    check(
        patchElectionMunicpaleResponse,
        { "Update Election Municpale response status code is 200": (r) => r.status == 200 }
    );

    // Delete user
    let deleteElectionMunicpaleResponse = http.del(
        `${API_URL}/elect_municipales/${JSON.parse(createElectionMunicipaleResponse.body).data.id}`,
        params
    )
    check(
        deleteElectionMunicpaleResponse,
        { "Delete Election Municpale response status code is 200": (r) => r.status == 200 }
    );

    // Short break between iterations
    sleep(0.5);
}