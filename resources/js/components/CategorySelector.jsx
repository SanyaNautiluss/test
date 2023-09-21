import React, { useState, useMemo, useEffect } from 'react';
import Select from 'react-select';
import makeAnimated from 'react-select/animated';

const CategorySelector = () => {
  const categories = useMemo(() => window.categories.data, [window.categories.data]);
  const animatedComponents = makeAnimated();

  // Create options for the category selector
  const CategoryOptions = useMemo(() => {
    return categories.map((category) => ({
      value: category.id,
      label: category.name,
    }));
  }, [categories]);

  // State to manage the selected categories
  const [selectedCategories, setSelectedCategories] = useState([]);

  // Handle category selection change
  const handleCategoryChange = (selectedOptions) => {
    setSelectedCategories(selectedOptions);
  };

  // Listen for changes in selectedCategories and update the hidden input field
  useEffect(() => {
    const hiddenInput = document.getElementById('selectedCategories');
    if (hiddenInput) {
      hiddenInput.value = JSON.stringify(selectedCategories.map((option) => option.value));
    }
  }, [selectedCategories]);

  return (
  
      <div style={{ width: '200px', marginRight: '10px' }}>
        <Select
          closeMenuOnSelect={false}
          components={animatedComponents}
          isMulti
          options={CategoryOptions}
          value={selectedCategories}
          onChange={handleCategoryChange}
          placeholder="Select Categories"
        />
      </div>
  
  );
};

export default CategorySelector;
