import { useState } from "react";
import { Local } from "./Local";

export const Album = ({ colaFigurinha }) => {
  const [album, setAlbum] = useState([
    {
      "id": 1,
      "pos": 1,
      "f": null
    },
    {
      "id": 1,
      "pos": 1,
      "f": null
    },
    {
      "id": 1,
      "pos": 1,
      "f": null
    },
    {
      "id": 1,
      "pos": 1,
      "f": null
    },
    {
      "id": 1,
      "pos": 1,
      "f": {
        "id": "95",
        "pos": 1,
        "name": "Alef Patoloco"
      }
    },
    {
      "id": 2,
      "pos": 2,
      "f": null
    },
    {
      "id": 2,
      "pos": 2,
      "f": {
        "id": "84",
        "pos": 2,
        "name": "Alyssa Michalski"
      }
    },
    {
      "id": 3,
      "pos": 3,
      "f": null
    },
    {
      "id": 3,
      "pos": 3,
      "f": null
    },
    {
      "id": 3,
      "pos": 3,
      "f": null
    },
    {
      "id": 3,
      "pos": 3,
      "f": {
        "id": "74",
        "pos": 3,
        "name": "Ana Spadini"
      }
    },
    {
      "id": 3,
      "pos": 3,
      "f": {
        "id": "91",
        "pos": 3,
        "name": "Ana Spadini"
      }
    },
    {
      "id": 3,
      "pos": 3,
      "f": null
    },
    {
      "id": 4,
      "pos": 4,
      "f": null
    },
    {
      "id": 4,
      "pos": 4,
      "f": {
        "id": "67",
        "pos": 4,
        "name": "Bernardo Marquetti"
      }
    },
    {
      "id": 4,
      "pos": 4,
      "f": null
    },
    {
      "id": 5,
      "pos": 5,
      "f": null
    },
    {
      "id": 5,
      "pos": 5,
      "f": null
    },
    {
      "id": 5,
      "pos": 5,
      "f": {
        "id": "64",
        "pos": 5,
        "name": "Bianca Motta"
      }
    },
    {
      "id": 5,
      "pos": 5,
      "f": {
        "id": "100",
        "pos": 5,
        "name": "Bianca Motta"
      }
    },
    {
      "id": 5,
      "pos": 5,
      "f": null
    },
    {
      "id": 6,
      "pos": 6,
      "f": null
    },
    {
      "id": 6,
      "pos": 6,
      "f": null
    },
    {
      "id": 6,
      "pos": 6,
      "f": {
        "id": "73",
        "pos": 6,
        "name": "Brandon Oliveira"
      }
    },
    {
      "id": 7,
      "pos": 7,
      "f": null
    },
    {
      "id": 7,
      "pos": 7,
      "f": null
    },
    {
      "id": 7,
      "pos": 7,
      "f": {
        "id": "51",
        "pos": 7,
        "name": "Cesar Torbes"
      }
    },
    {
      "id": 7,
      "pos": 7,
      "f": {
        "id": "60",
        "pos": 7,
        "name": "Cesar Torbes"
      }
    },
    {
      "id": 7,
      "pos": 7,
      "f": {
        "id": "69",
        "pos": 7,
        "name": "Cesar Torbes"
      }
    },
    {
      "id": 7,
      "pos": 7,
      "f": null
    },
    {
      "id": 8,
      "pos": 8,
      "f": null
    },
    {
      "id": 8,
      "pos": 8,
      "f": null
    },
    {
      "id": 8,
      "pos": 8,
      "f": null
    },
    {
      "id": 8,
      "pos": 8,
      "f": null
    },
    {
      "id": 8,
      "pos": 8,
      "f": {
        "id": "58",
        "pos": 8,
        "name": "Gabriel Minetto"
      }
    },
    {
      "id": 8,
      "pos": 8,
      "f": null
    },
    {
      "id": 9,
      "pos": 9,
      "f": null
    },
    {
      "id": 9,
      "pos": 9,
      "f": null
    },
    {
      "id": 9,
      "pos": 9,
      "f": {
        "id": "56",
        "pos": 9,
        "name": "Giovanni Zini"
      }
    },
    {
      "id": 9,
      "pos": 9,
      "f": {
        "id": "65",
        "pos": 9,
        "name": "Giovanni Zini"
      }
    },
    {
      "id": 9,
      "pos": 9,
      "f": {
        "id": "88",
        "pos": 9,
        "name": "Giovanni Zini"
      }
    },
    {
      "id": 9,
      "pos": 9,
      "f": null
    },
    {
      "id": 10,
      "pos": 10,
      "f": null
    },
    {
      "id": 10,
      "pos": 10,
      "f": {
        "id": "62",
        "pos": 10,
        "name": "Gustavo de Carli"
      }
    },
    {
      "id": 10,
      "pos": 10,
      "f": {
        "id": "76",
        "pos": 10,
        "name": "Gustavo de Carli"
      }
    },
    {
      "id": 10,
      "pos": 10,
      "f": null
    },
    {
      "id": 11,
      "pos": 11,
      "f": null
    },
    {
      "id": 11,
      "pos": 11,
      "f": null
    },
    {
      "id": 11,
      "pos": 11,
      "f": null
    },
    {
      "id": 11,
      "pos": 11,
      "f": {
        "id": "72",
        "pos": 11,
        "name": "Gustavo Orth"
      }
    },
    {
      "id": 11,
      "pos": 11,
      "f": {
        "id": "79",
        "pos": 11,
        "name": "Gustavo Orth"
      }
    },
    {
      "id": 11,
      "pos": 11,
      "f": {
        "id": "82",
        "pos": 11,
        "name": "Gustavo Orth"
      }
    },
    {
      "id": 12,
      "pos": 12,
      "f": null
    },
    {
      "id": 12,
      "pos": 12,
      "f": null
    },
    {
      "id": 12,
      "pos": 12,
      "f": null
    },
    {
      "id": 12,
      "pos": 12,
      "f": {
        "id": "52",
        "pos": 12,
        "name": "Henrique Santos"
      }
    },
    {
      "id": 12,
      "pos": 12,
      "f": {
        "id": "81",
        "pos": 12,
        "name": "Henrique Santos"
      }
    },
    {
      "id": 12,
      "pos": 12,
      "f": {
        "id": "89",
        "pos": 12,
        "name": "Henrique Santos"
      }
    },
    {
      "id": 12,
      "pos": 12,
      "f": {
        "id": "96",
        "pos": 12,
        "name": "Henrique Santos"
      }
    },
    {
      "id": 13,
      "pos": 13,
      "f": null
    },
    {
      "id": 13,
      "pos": 13,
      "f": null
    },
    {
      "id": 13,
      "pos": 13,
      "f": null
    },
    {
      "id": 13,
      "pos": 13,
      "f": null
    },
    {
      "id": 13,
      "pos": 13,
      "f": {
        "id": "70",
        "pos": 13,
        "name": "Jeniffer Carvalho"
      }
    },
    {
      "id": 13,
      "pos": 13,
      "f": {
        "id": "80",
        "pos": 13,
        "name": "Jeniffer Carvalho"
      }
    },
    {
      "id": 13,
      "pos": 13,
      "f": {
        "id": "86",
        "pos": 13,
        "name": "Jeniffer Carvalho"
      }
    },
    {
      "id": 13,
      "pos": 13,
      "f": null
    },
    {
      "id": 13,
      "pos": 13,
      "f": null
    },
    {
      "id": 14,
      "pos": 14,
      "f": null
    },
    {
      "id": 14,
      "pos": 14,
      "f": null
    },
    {
      "id": 14,
      "pos": 14,
      "f": null
    },
    {
      "id": 14,
      "pos": 14,
      "f": {
        "id": "87",
        "pos": 14,
        "name": "João Ryan"
      }
    },
    {
      "id": 14,
      "pos": 14,
      "f": {
        "id": "92",
        "pos": 14,
        "name": "João Ryan"
      }
    },
    {
      "id": 15,
      "pos": 15,
      "f": null
    },
    {
      "id": 15,
      "pos": 15,
      "f": null
    },
    {
      "id": 15,
      "pos": 15,
      "f": null
    },
    {
      "id": 15,
      "pos": 15,
      "f": null
    },
    {
      "id": 15,
      "pos": 15,
      "f": {
        "id": "57",
        "pos": 15,
        "name": "João Victor"
      }
    },
    {
      "id": 15,
      "pos": 15,
      "f": {
        "id": "93",
        "pos": 15,
        "name": "João Victor"
      }
    },
    {
      "id": 15,
      "pos": 15,
      "f": null
    },
    {
      "id": 16,
      "pos": 16,
      "f": null
    },
    {
      "id": 16,
      "pos": 16,
      "f": {
        "id": "50",
        "pos": 16,
        "name": "João Vitor"
      }
    },
    {
      "id": 16,
      "pos": 16,
      "f": {
        "id": "55",
        "pos": 16,
        "name": "João Vitor"
      }
    },
    {
      "id": 17,
      "pos": 17,
      "f": null
    },
    {
      "id": 17,
      "pos": 17,
      "f": {
        "id": "85",
        "pos": 17,
        "name": "Joseph Cipriani"
      }
    },
    {
      "id": 17,
      "pos": 17,
      "f": null
    },
    {
      "id": 18,
      "pos": 18,
      "f": null
    },
    {
      "id": 18,
      "pos": 18,
      "f": null
    },
    {
      "id": 18,
      "pos": 18,
      "f": {
        "id": "54",
        "pos": 18,
        "name": "Juan Córdova"
      }
    },
    {
      "id": 18,
      "pos": 18,
      "f": {
        "id": "63",
        "pos": 18,
        "name": "Juan Córdova"
      }
    },
    {
      "id": 18,
      "pos": 18,
      "f": {
        "id": "66",
        "pos": 18,
        "name": "Juan Córdova"
      }
    },
    {
      "id": 19,
      "pos": 19,
      "f": {
        "id": "53",
        "pos": 19,
        "name": "Júlia Conzatti"
      }
    },
    {
      "id": 19,
      "pos": 19,
      "f": {
        "id": "77",
        "pos": 19,
        "name": "Júlia Conzatti"
      }
    },
    {
      "id": 19,
      "pos": 19,
      "f": {
        "id": "99",
        "pos": 19,
        "name": "Júlia Conzatti"
      }
    },
    {
      "id": 19,
      "pos": 19,
      "f": null
    },
    {
      "id": 19,
      "pos": 19,
      "f": null
    },
    {
      "id": 19,
      "pos": 19,
      "f": null
    },
    {
      "id": 20,
      "pos": 20,
      "f": null
    },
    {
      "id": 20,
      "pos": 20,
      "f": null
    },
    {
      "id": 20,
      "pos": 20,
      "f": {
        "id": "94",
        "pos": 20,
        "name": "Maria Eduarda Bortolini"
      }
    },
    {
      "id": 20,
      "pos": 20,
      "f": {
        "id": "97",
        "pos": 20,
        "name": "Maria Eduarda Bortolini"
      }
    },
    {
      "id": 20,
      "pos": 20,
      "f": null
    },
    {
      "id": 20,
      "pos": 20,
      "f": null
    },
    {
      "id": 21,
      "pos": 21,
      "f": {
        "id": "71",
        "pos": 21,
        "name": "Mateus Haupt"
      }
    },
    {
      "id": 21,
      "pos": 21,
      "f": {
        "id": "98",
        "pos": 21,
        "name": "Mateus Haupt"
      }
    },
    {
      "id": 21,
      "pos": 21,
      "f": null
    },
    {
      "id": 22,
      "pos": 22,
      "f": {
        "id": "61",
        "pos": 22,
        "name": "Pedro Henrique Ferrarri"
      }
    },
    {
      "id": 22,
      "pos": 22,
      "f": null
    },
    {
      "id": 22,
      "pos": 22,
      "f": null
    },
    {
      "id": 23,
      "pos": 23,
      "f": null
    },
    {
      "id": 23,
      "pos": 23,
      "f": null
    },
    {
      "id": 23,
      "pos": 23,
      "f": {
        "id": "59",
        "pos": 23,
        "name": "Ruan Schneider"
      }
    },
    {
      "id": 23,
      "pos": 23,
      "f": {
        "id": "68",
        "pos": 23,
        "name": "Ruan Schneider"
      }
    },
    {
      "id": 24,
      "pos": 24,
      "f": {
        "id": "90",
        "pos": 24,
        "name": "Ryan Ramos"
      }
    },
    {
      "id": 25,
      "pos": 25,
      "f": null
    },
    {
      "id": 25,
      "pos": 25,
      "f": null
    },
    {
      "id": 25,
      "pos": 25,
      "f": {
        "id": "75",
        "pos": 25,
        "name": "Victor Mazutti"
      }
    },
    {
      "id": 25,
      "pos": 25,
      "f": {
        "id": "78",
        "pos": 25,
        "name": "Victor Mazutti"
      }
    },
    {
      "id": 25,
      "pos": 25,
      "f": {
        "id": "83",
        "pos": 25,
        "name": "Victor Mazutti"
      }
    },
    {
      "id": 25,
      "pos": 25,
      "f": null
    }
  ]);
  return (
    <div
      style={{
        display: "grid",
        border: "solid 1px #785e3a",
        width: "100%",
        height: "500px",
        gridTemplateColumns: "200px 200px 200px",
        gridRowStart: "1",
        gridRowEnd: "3"
      }}
    >
      {(album.filter((f) => f.pos < 6)).map((local) => (
        <Local
          key={local.id}
          local={local}
          setAlbum={setAlbum}
          colaFigurinha={colaFigurinha}
        />
      ))}
    </div>
  );
};
