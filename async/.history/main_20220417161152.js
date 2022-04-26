// fetch("https://swapi.dev/api/people/1/")
//   .then((res) => {
//     console.log("Resolved", res);
//     return res.json();
//   })
//   .then((data) => {
//     console.log(data);
//     return fetch("https://swapi.dev/api/people/2/");
//   });

// const loadStarWarsPeople = async () => {
//   try {
//     const res = await fetch("https://swapi.dev/api/people/1/");
//     const data = await res.json();
//     console.log(data);
//     const res1 = await fetch("https://swapi.dev/api/people/2/");
//     const data1 = await res.json();
//     console.log(data1);
//   } catch (e) {
//     console.log("ERROR!", e);
//   }
// };
// loadStarWarsPeople();

// axios.get("https://swapi.dev/api/people/1/").then((res) => {
//   console.log(res);
// }).catch((e) => {
//   console.log("ERROR! ", e);
// });

const getStarWar = async (id) => {
  const res = await axios.get(`https://swapi.dev/api/people/${id}`);
  console.log(res.data);
};
getStarWar(4);
