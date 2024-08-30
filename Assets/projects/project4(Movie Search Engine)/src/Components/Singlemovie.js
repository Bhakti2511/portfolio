import {React , useEffect , useState} from 'react'
import { NavLink, useParams } from 'react-router-dom';
import { API_URL } from './Context';

const Singlemovie = () => {
  const { id }= useParams();

  const [isLoading, setisLoading] = useState(true);
  const [movie, setmovie] = useState("");
 const [Error, setError] = useState(true);
 const [query, setQuery] = useState("dil");

  const getMovies = async (url) => {
    setisLoading(true);

    try {
      
      const res = await fetch(url);
      // console.log(res);
      const data = await res.json();
      // console.log(data);

      if (data.Response === "True") {
        setisLoading(false);
        setError({
          show: "false",
          msg: data.Error,
        });
        setmovie(data);
      }
    } catch (error) {
      console.log(error);
    }
  };

   useEffect(() => {
     var TimerOut = setTimeout(() => {
       getMovies(`${API_URL}&i=${id}`);
     }, 300);
     return () => clearTimeout(TimerOut);
   }, [id]);


    if (isLoading) {
      return <h2>Loading...</h2>
    }
  return (
    <section className="back">
      <div className="back-box">
        {/* <h3>Our Single movie {id}</h3> */}
        <figure>
          <img src={movie.Poster}></img>
        </figure>
        <div className="main-box">
          <h1>{movie.Title}</h1>
          <h5>{movie.Genre}</h5>
          <h5>{movie.Released}</h5>
          <h5>{movie.Language}</h5>
          <h5>{movie.Country}</h5>
          <h5>{movie.imdbRating}</h5>
          <NavLink className="btn" to="/">
            {" "}
            Go Back
          </NavLink>
        </div>
      </div>
    </section>
  );
}

export default Singlemovie;