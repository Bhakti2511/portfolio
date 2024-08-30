import React from 'react'
import { useGlobalContext } from './Context'
import { NavLink } from 'react-router-dom';
import style from './Style.css';

const Movies = () => {

  const { movie, isLoading } = useGlobalContext();

  if (isLoading) {
    return <h2>Loading...</h2>;
  }
  return (
    <>
    <section className='readingmovie'>
      <div className='grid grid-4-col'>
        {movie.map((curmovie) => {
          const {imdbID , Poster , Title , Year} = curmovie;
          const movieName = Title.substring(0, 12);
          return (
            <NavLink to={`Movies/${imdbID}`} key={imdbID}>
              <div className="card">
                <div className="card-info">
                  <h2>
                    {movieName.length >= 12 ? `${movieName}...` : movieName} 
                  </h2>
                  <img src={Poster} alt={imdbID}></img>
                  <h4>{Year}</h4>
                </div>
              </div>
            </NavLink>
          );
          })};

      </div> </section>
    </>
  );
};

export default Movies