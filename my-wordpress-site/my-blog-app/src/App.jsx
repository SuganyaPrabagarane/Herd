
import React, { useState, useEffect } from 'react';
import axios from 'axios';
import Blog from './components/Blog';

export default function App() {
  const [posts, setPosts] = useState([])

  const fetchPosts = () => {
    // Using axios to fetch the posts
    axios
      .get("http://my-wordpress-site.test/wp-json/wp/v2/posts?_embed") 
      .then((res) => {
        // Saving the data to state
        setPosts(res.data);
        console.log(res.data);
      });
  }


  // Calling the function on page load
  useEffect(() => {
    fetchPosts()
  }, [])

  return (
    <div>
      {posts.map((item) => (
        <Blog key={item.id} post={item} />
      ))}
   </div>
  )
}