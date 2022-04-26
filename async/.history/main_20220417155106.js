// fetch("https://swapi.dev/api/people/1/")
//   .then((res) => {
//     console.log("Resolved", res);
//     return res.json();
//   })
//   .then((data) => {
//     console.log(data);
//     return fetch("https://swapi.dev/api/people/2/");
//   });

const loadStarWarsPeople = async () => {
  const res = await fetch("https://swapi.dev/api/people/1/");
  const data = await res.json();
  console.log(data);
};
