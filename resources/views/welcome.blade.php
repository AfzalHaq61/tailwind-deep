<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-3xl font-bold underline">
        Hello world
      </h1>
      <!-- space-y-5 when there is the same spacing between the childs elements so you can make easy on space-y-5 -->
      <div class="h-[200px] w-[200px] bg-yellow-600 m-[10px] rounded-3xl text-center space-y-3 p-5">
        <h1>hello</h1>
        <h1>hello</h1>
        <h1>hello</h1>
        <h1>hello</h1>
        <h1>hello</h1>
      </div>
      <!-- max-w-sm and mx-auto(it will apply to the dev which you want to center) -->
      <div class="w-screen">
        <div class="bg-green-200 p-10 rounded-md max-w-screen-sm mx-auto">
          <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora quam voluptate neque aspernatur dolor
            aperiam est consequuntur ut odit vero! Dignissimos exercitationem facilis quis, illo quos eos repellendus ea
            ullam?</h1>
          <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. At et architecto provident? Illum doloribus voluptas
            soluta quis error ut corrupti tenetur, sequi, vel nobis obcaecati, officia nemo quisquam numquam rem.</h1>
          <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. At et architecto provident? Illum doloribus voluptas
            soluta quis error ut corrupti tenetur, sequi, vel nobis obcaecati, officia nemo quisquam numquam rem.</h1>
          <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. At et architecto provident? Illum doloribus voluptas
            soluta quis error ut corrupti tenetur, sequi, vel nobis obcaecati, officia nemo quisquam numquam rem.</h1>
        </div>
      </div>
      <!-- object-cover will crop the image and object-center will give you chance to cover which part you want -->
      <div class="my-4">
        <img class="h-[500px] w-full mx-auto object-cover object-center" src="img/instructor.jpg" alt="">
      </div>
      <!-- Focus, ring, active, translation and transition to button -->
      <div class="flex justify-center w-full rounded-md p-4">
    
        <button class="
          inline-block 
          px-5 py-3 
          rounded-lg shadow-lg
          bg-indigo-500 hover:bg-indigo-400 
          hover:-translate-y-0.5 transform transition
          text-white 
          uppercase 
          tracking-wider 
          font-semibold 
          text-sm 
          focus:outline-none focus:ring-2 focus:ring-offset-2
          focus:ring-indigo-500 focus:ring-opacity-50
          active:bg-indigo-600">
          Focus, ring, active, translation, transition
        </button>
    
        <button class="btn">
          btn component
        </button>
    
      </div>
</body>

</html>
