import axios from "axios";
import React, { useEffect, useState } from "react";
import "./blog.css";
 
export default function Blog({ post }) {
  const [featuredImage, setFeaturedImage] = useState(null);
  
 
  const getImage = () => {  
    const mediaLink = post?._links?.["wp:featuredmedia"]?.[0]?.href;
    if (!mediaLink) {
      setFeaturedImage(null);
      return;
    }
 
    axios
      .get(mediaLink)
      .then((response) => {
        setFeaturedImage(response.data.source_url);
      })
      .catch(() => {
        setFeaturedImage(null);
      });
  };
 
  useEffect(() => {
    getImage();
  }, []);
 
  return (
    <div className="container">
      <div className="blog-container">
        <p className="blog-date">
          {new Date(Date.now()).toLocaleDateString("en-US", {
            day: "numeric",
            month: "long",
            year: "numeric",
          })}
        </p>
        <h2 className="blog-title">{post.title.rendered}</h2>
        <p
          className="blog-excerpt"
          dangerouslySetInnerHTML={{ __html: post.excerpt.rendered }}
        />
        {featuredImage ? (
          <img src={featuredImage} alt={post.title.rendered} className="mask" />
        ) : (
          <p>No featured image available.</p>
        )}
      </div>
    </div>
  );
}
 
 