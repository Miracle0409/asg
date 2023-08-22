CREATE TABLE urls (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    long_url TEXT NOT NULL,
    short_url VARCHAR(100) NOT NULL,
    visit_count INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
